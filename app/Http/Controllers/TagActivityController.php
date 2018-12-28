<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

class TagActivityController extends Controller
{
    public function tagactivity(){
        $users=DB::select('call sp_assign_project()');
        $data=DB::select('call sp_assign_task()');

        return view('tag-activity',['users'=>$users,'data'=>$data])->with('no',1);

// return view('tag-activity');
}


 


public function tagactivityview(){
 $data=DB::select('call sp_load_tag_activty');
 return view('tag-activity-view',['data'=>$data]);
}





public function tagactivityinsert(CustomValidation $validator,Request $req){
//print_r($req->all());exit();
    $data = array();
    $error = array();

    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
        'REQUIRED_VALIDATIONS'=>array('emp_name'=>'Please Enter Task Name')
        
    );

    extract($validator->validate_required($parameters));

    if(count($error) === 0){

    $user = Session::get('Id');
    $query=DB::insert('call sp_insert_tag_activity(?,?,?,?)',array($req->project_name,$req->emp_name,
        $req->Completed,$req->TagedTo));
    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"tag-activity");
            echo json_encode($success_msg);

    } 
    else{
        echo json_encode($error);
    }
}

  }
