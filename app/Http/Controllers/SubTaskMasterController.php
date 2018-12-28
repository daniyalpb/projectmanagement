<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

class SubTaskMasterController extends Controller
{
    public function subtaskmaster(){

    $users=DB::select('call sp_assign_task()');

      $data=DB::select('call sp_assign_project()');

        return view('subtask-master',['users'=>$users,'data'=>$data])->with('no',1);
    }





public function  assignproject(){
 $data=DB::select('call sp_assign_project()');

return view('subtask-master',['data'=>$data])->with('no',1);
}

public function subtaskmasterview(){
$data=DB::select('call sp_load_subtask_master');
return View('subtask-master-view',['data'=>$data]);
}

public function subinserttaskmaster(CustomValidation $validator,Request $req){
//print_r($req->all());exit();

//print_r($req->all());exit();
    $data = array();
    $error = array();

    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
        'REQUIRED_VALIDATIONS'=>array('Name'=>'Please Enter Task Name')
        
    );

    extract($validator->validate_required($parameters));

    if(count($error) === 0){

    $user = Session::get('Id');
    $query=DB::insert('call sp_insert_subtask_master(?,?,?,?,?,?,?,?,?)',array($req->Name, $req->Subtask_Name,$req->Assigned_To,$req->Assigned_Date,
      $req->Start_Date,$req->End_Date,$req->Status, $req->Remark,$req->Description));
    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"subtask-master");
            echo json_encode($success_msg);

    } 
    else{
        echo json_encode($error);
    }
}



}
    
