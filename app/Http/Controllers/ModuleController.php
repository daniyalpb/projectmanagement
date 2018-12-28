<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

class ModuleController extends Controller
{
    public function modulemaster(){
$data=DB::select('call sp_assign_project');


 return view('module-master',['data'=>$data]);
    }



public function insertmodulemaster(CustomValidation $validator,Request $req){

//print_r($req->all());exit();
    $data = array();
    $error = array();

    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
        'REQUIRED_VALIDATIONS'=>array('Module_Name'=>'Please Enter Project Name')
        
    );

    extract($validator->validate_required($parameters));

    if(count($error) === 0){

    $user = Session::get('Id');
    $query=DB::insert('call sp_insert_module_master(?,?,?,?)',array($req->Name,$req->Description,$req->CreateDate,$req->Module_Name));
    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"module-master");
            echo json_encode($success_msg);

    } 
    else{
        echo json_encode($error);
    }
}


public function modulemasterview(){

 $data=DB::select('call sp_load_module_master');
 return view('module-master-view',['data'=>$data]);
}
}
    
