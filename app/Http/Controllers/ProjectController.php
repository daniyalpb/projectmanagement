<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

class ProjectController extends Controller
{
    public function project(){
        return view('project-master');
    }




       public function projectview(){
        $querry=DB::select("call sp_view_task()");
       
        return view('project-master',['querry'=>$querry])->with('no', 1);

    }

public function project_insert(CustomValidation $validator,Request $req){

    $data = array();
    $error = array();

    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
        'REQUIRED_VALIDATIONS'=>array('project_name'=>'Please Enter Project Name')
        
    );

    extract($validator->validate_required($parameters));

    if(count($error) === 0){

    $user = Session::get('id');
    $query=DB::insert('call insert_project(?,?,?,?)',array($req->project_name,$user,$req->description,$req->Owner));
    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"project-master");
            echo json_encode($success_msg);

    } 
    else{
        echo json_encode($error);
    }
}

     


    public function projectmaster(){
            $data=DB::select("call usp_get_project_master()");
        return view('task-description',['data'=>$data]);    	
    }

    public function project_master(Request $req,CustomValidation $validator){

    $data = array();
    $error = array();

    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
    'REQUIRED_VALIDATIONS'=>array('project_id'=>'Please Enter Project Name','task_name'=>'Please Enter Task','description'=>'Please Enter Task Description')
);
 //print_r($parameters); exit();
    extract($validator->validate_required($parameters));

    if(count($error) === 0){

    $user = Session::get('id');
    $query= DB::insert('call insert_project_task(?,?,?,?)',array($req->project_id,$req->task_name,$user,$req->description));

    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert",'redirectUrl'=>'/task-description');
    echo json_encode($success_msg);
    //print_r($success_msg);
    } 
    else{
        echo json_encode($error);
    }
}
  

    public function projectmasterview(){
            $data=DB::select("call usp_get_project_master_details()");
        return view('project-master-view',['data'=>$data])->with('no',1);
    	
    }

    


public function projectsmove(){
    $data=DB::select("call usp_get_project_master_details()");

 return view('project-move',['data'=>$data])->with('no',1);

}


}