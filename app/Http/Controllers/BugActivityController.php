<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

class BugActivityController extends Controller
{
  public function bugactivity(Request $req){
  $user=DB::select('call sp_load_bug_activity(?)',array($req->Issues));
  $data=DB::select("call sp_assign_project");
  $empdata=DB::select("call sp_assign_task");
  $reporterdata=DB::select("call usp_load_reporter");
  return view('bug-activity',['user'=>$data ,'data'=>$data,'empdata'=>$empdata,'reporterdata'=>$reporterdata])->with('no',1);
   }




public function bugactivityinsert(CustomValidation $validator,Request $req){

//print_r($req->all());exit();
    $data = array();
    $error = array();

    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
        'REQUIRED_VALIDATIONS'=>array('TaskName'=>'Please Enter Task Name')
        
    );

    extract($validator->validate_required($parameters));

    if(count($error) === 0){

    $user = Session::get('Id');
    $query=DB::insert('call sp_insert_bug_activity(?,?,?,?,?,?,?,?)',array($req->project_name,$req->TaskName,$req->CreateDate,$req->Reporter,$req->emp_name, $req->Issues,$req->Description,$req->Environment,));
    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"bug-activity");
            echo json_encode($success_msg);

    } 
    else{
        echo json_encode($error);
    }
}


public function bugactivityview(Request $req){

 $query=DB::select('call sp_view_bug_activity');
 return view('bug-activity-view',['query'=>$query]);
}
}
    
