<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;
use App\EmailLibrary;


class MenuController extends Controller
{
    public function menulist(){
    	$data=DB::select("call get_menu_group_master()");
    	return view('menu-list',['data'=>$data]);
    }
    public function menu_list(Request $req,CustomValidation $validator){
    	$data = array();
    $error = array();
    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
    'REQUIRED_VALIDATIONS'=>array('parent_id'=>'Please Select Parent Menu','menu_name'=>'Please Select Menu Name','level_name'=>'Please Enter Level','sequence'=>'Please Enter Sequence','url_link'=>'Please Enter URL LINK'));
  //print_r($parameters);exit();
    extract($validator->validate_required($parameters));
    if(count($error) === 0){
    $user = Session::get('id');   
    $query= DB::insert('call insert_menu_list(?,?,?,?,?,?)',array($req->parent_id,$req->menu_name,$req->url_link,$req->sequence,$user,$req->level_name));
    // parent_id,name,url_link,seq,created_at,lvl,created_date
    //print_r($query);exit();

    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"menu-list");
            echo json_encode($success_msg);
    } 
    else{
        echo json_encode($error);
    }
  }

  public function menugroup(){
  	$data=DB::select("call usp_get_menu_group_master ()");
  	return view('menu-group',['data'=>$data])->with('no',1);
  }
}
