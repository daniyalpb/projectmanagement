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

class CreateIssueController extends Controller{
    public function create_issue(){
    	 $data=DB::select("call sp_view_create_issues()");
    //$data=DB::select('call sp_insert_create_issues(?)',array($req->id,$req ););
 
   
        return view('create-issue',['data'=>$data]);    	
    

    }

    public function insert_create_issue(Request $req){
    	// print_r($req->all());exit;
    	 $data=DB::select('call sp_insert_create_issues(?,?,?,?)',array($req->project_name,$req->issue_id, $req->reporter,$req->summary));
    	 return  $data;
    	
    }
}