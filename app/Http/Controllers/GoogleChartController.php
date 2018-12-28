<?php
namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use DB;


class GoogleChartController extends InitialController{





public function googleLineChart(){
    return view('google-line-chart');
}
    public function chart(Request $req){
 $data=$this::api_call_function("http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/dsplyMonthwiseLeads_ForRB");
  return $data;
}


public function api_call_function($url){
 $data=array('empCode' =>Session::get('empCode'));
   $dt=json_encode($data);
   $result=$this->call_json_data_api($url,$dt);
   $http_result=$result['http_result'];
   $error=$result['error'];
    if($http_result){
    return $http_result;
    }else{
return 0;
}
}

public function call_json_data_api($url,$data){
   $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        $http_result = curl_exec($ch);
        $error = curl_error($ch);
        $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
        curl_close($ch);
        $result=array('http_result' =>$http_result ,'error'=>$error );
        return $result;
  }
}