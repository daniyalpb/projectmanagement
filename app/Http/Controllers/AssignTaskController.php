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

class AssignTaskController extends Controller
{
    public function assigntask(){
        $data=DB::select("call sp_assign_employee_details()");
       
    	return view('assign-task',['data'=>$data])->with('no', 1);

    }

    public function getcountvalue(Request $req){
    	$count = DB::select('call sp_assign_task(?)',array($req->project_name));
    	return $count;
    }

    public function taskhistory(Request $req){
          $user=DB::select('call sp_view_task()');
        return view('task-history',['user'=>$user])->with('no',1);

    }



    public function taguser(Request $req)
    {
        DB::statement("call sp_insert_tag_activity(?,?,?,?)",array($req->Name,$req->Complted,$req->CreatedDate,$req->TagedTo,));
        return Redirect('assign-task');
    }





public function task_history_view( Request $req){
    	$user=DB::select('call usp_get_task_history_view(?)',array($req->id));
    	   //$user= DB::select('call usp_get_task_history_view(?)',array($id))[0];

    	return view('task-history-view',['user'=>$user]);
   
    }

     public function task_history_update(Request $req){
       // return $req->all();
    	// print_r($req->all());
    	// exit();
  
    	 $user=DB::update('call sp_update_task_master(?,?,?,?)',array($req->u_EmpId,$req->projectname,$req->Status,$req->Devloper,));
    	return $user; 
     //     $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Updated");
     //        echo json_encode($success_msg);
              
    }

}



