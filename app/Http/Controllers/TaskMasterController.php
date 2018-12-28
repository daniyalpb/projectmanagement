<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

class TaskMasterController extends Controller
{
    public function taskmaster(){
 $data=DB::select("call sp_assign_project");
    return view('task-master',['data'=>$data])->with('no',1);

    }




public function inserttaskmaster(CustomValidation $validator,Request $req){

//print_r($req->all());exit();
    $data = array();
    $error = array();

    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
        'REQUIRED_VALIDATIONS'=>array('Task_Name'=>'Please Enter Task Name')
        
    );

    extract($validator->validate_required($parameters));

    if(count($error) === 0){

    $user = Session::get('Id');
    $query=DB::insert('call sp_insert_module_master(?,?,?,?)',array($req->Name,$req->Description,$req->CreateDate,$req->Task_Name));
    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"task-master");
            echo json_encode($success_msg);

    } 
    else{
        echo json_encode($error);
    }
}


public function taskmasterview(){

 $data=DB::select('call sp_load_task_master');
 return view('task-master-view',['data'=>$data]);
}
}
    
