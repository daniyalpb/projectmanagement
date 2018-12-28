<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

class RelesesController extends Controller
{





public function releasedetailsview(){
  



         $data=DB::select("call sp_releses_details()");
       
        return view('release-details',['data'=>$data])->with('no', 1);


    }




public function releasedetails(CustomValidation $validator,Request $req){

//print_r($req->all());exit();
    $data = array();
    $error = array();

    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
        'REQUIRED_VALIDATIONS'=>array('Status'=>'Please Enter Status Name')
        
    );

    extract($validator->validate_required($parameters));

    if(count($error) === 0){

    $user = Session::get('Id');
    $query=DB::insert('call sp_insert_releses_master(?,?,?,?,?,?,?)',array($req->Versions,$req->Status,
       $req->Progress, $req->Description,$req->Start_Date,$req->Release_date,$req->Action));
    $success_msg = array('status'=>'success',"messege"=>"Your File Successfully Insert","redirectUrl"=>"release-details");
            echo json_encode($success_msg);

    } 
    else{
        echo json_encode($error);
    }
}

}