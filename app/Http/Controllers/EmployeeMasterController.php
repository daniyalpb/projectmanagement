<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
use App\CustomValidation;

class EmployeeMasterController extends Controller
{
    public function employeemaster(){
    return view('employee-master');
    }

    public function employee_master(CustomValidation $validator,Request $req){
   // print_r($req->all());

    $data = array();
    $error = array();
    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
    'REQUIRED_VALIDATIONS'=>array('empcode'=>'Please Enter Employee Code','empname'=>'Please Enter Employee Name','address'=>'Please Enter Address','mobile'=>'Please Enter Mobile No','designation'=>'Please Enter Desination','date_of_joining'=>'Please Enter DOJ'),
    'EMAIL_VALIDATIONS'=>array('email'=>'Please Enter Valid Email Address')
);
    //print_r($parameters);
    extract($validator->validate_email($parameters));
    extract($validator->validate_required($parameters));
    if(count($error) === 0){
    $user = Session::get('id');
    $ipaddress = $_SERVER['REMOTE_ADDR'];

   
    $query= DB::insert('call insert_employee_master(?,?,?,?,?,?,?,?,?,?)',array($req->empcode,$req->empname,$req->mobile,$req->email,$req->address,$req->designation,$req->date_of_joining,$req->is_active,$user,$ipaddress));
    //print_r($query);
    //exit();

    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"employee-master");
            echo json_encode($success_msg);
   } 
    else{
        echo json_encode($error);
    }
  
    }
    public function employee_table(){
        $data=DB::select("call usp_get_employee_master()");
       
    	return view('employee-table',['data'=>$data])->with('no', 1);

    }

    public function employeeupdate($id){
    	 $user=DB::select("call usp_get_employee_master_view($id)");
    	  // $user= DB::select('call usp_show_empolyee_list(?)',array($id))[0];

    	return view('employee-master-view',['user'=>$user]);
   
    }

    public function employee_update(Request $req){
    	//print_r($req->all());
    	//exit();
        if($req->is_active == '0'){
            $is_active = 1;
        }else{
            $is_active = null;
        }
    	$ipaddress = $_SERVER['REMOTE_ADDR'];
    	$user = Session::get('id');
    	$user=DB::update("call update_employee_master(?,?,?,?,?,?,?,?,?,?)",array($req->empcode,$req->empname,$req->mobile,$req->email,$req->address,$req->designation,$req->date_of_joining,$is_active,$user,$ipaddress));
    	// return Redirect('employee-master-view');
         $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Updated");
        echo json_encode($success_msg);
    }
}
