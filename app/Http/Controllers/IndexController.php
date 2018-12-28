<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;
use App\EmailLibrary;

class IndexController extends Controller
{
    public function dashboard(){
            return view('dashboard');
        }

    public function registration(){
    	return view('registration');
    }

    public function insert_registration(CustomValidation $validator,Request $req){
    $data = array();
    $error = array();
    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
    'REQUIRED_VALIDATIONS'=>array('name'=>'Please Enter Name','password'=>'Please Enter Password'),
    'EMAIL_VALIDATIONS'=>array('email'=>'Please Enter Valid Email Address'),
    'MOBILE_VALIDATIONS'=>array('mobile'=>'Please Enter mobile')
);
    extract($validator->validate_email($parameters));
    extract($validator->validate_mobilenumber($parameters));
    extract($validator->validate_required($parameters));
    if(count($error) === 0){
    $user = Session::get('id');
    $ipaddress = $_SERVER['REMOTE_ADDR'];   
    $query= DB::insert('call insert_registration_form(?,?,?,?,?)',array($req->name,$req->email,$req->mobile,$req->password,$ipaddress ));
    //print_r($query);exit();

    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"registration");
            echo json_encode($success_msg);
    } 
    else{
        echo json_encode($error);
    }
  }
}


      // if(isset($error_array) and !empty($error_array)){
      //       echo json_encode(array('status'=>'error','messege'=>$error_array));
      //     }else{
      //       $response_array = array('status'=>'success',"messege"=>"Your File Successfully Uploaded and Updated");
      //       echo json_encode($response_array);