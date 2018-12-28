<?php
namespace  App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

class HomeController extends Controller
{
  
    public function homemaster(){
      $data=DB::select("call assign_bug_activiy()");
      $query=DB::select("call sp_assign_project()");
      $status=DB::select("call sp_status_view()");
      $reporterdata=DB::select("call usp_load_reporter()");
      $reporterassign=DB::select("call usp_load_assignee()");
      $homes=DB::select("call sp_view_project_details()");
      $taguser=DB::select("call sp_assign_task()");
      return view('home',['data'=>$data,'query'=>$query,'status'=>$status,'reporterdata'=>$reporterdata,'taguser'=>$taguser,'reporterassign'=>$reporterassign,'homes'=>$homes])->with('no',1);
     }



public function inserthomemaster(CustomValidation $validator,Request $req){

//print_r($req->all());exit();

//foreach($req as $val){
 // print_r("---------------");
  //print_r($val);
  //$query = DB::insert('call  sp_insert_project_details(?)',array($val));
//}
//exit();
    $data = array();
    $error = array();

    $parameters['REQUEST'] = $req->all();
    $parameters['VALIDATIONS'] = array(
        'REQUIRED_VALIDATIONS'=>array('Status'=>'Please Enter Status Name')
        
    );

    extract($validator->validate_required($parameters));

    if(count($error) ===0){

	$homeinsert=DB::Insert('call  sp_insert_project_details(?,?,?,?,?)',array($req->project_name,$req->Issues,$req->Status,$req->emp_name,$req->Reporter,$req->assignee));
    $success_msg = array('Status'=>'success',"messege"=>"Your File  Successfully Insert","redirectUrl"=>"home");
            echo json_encode($success_msg);


    } 
    else{
        echo json_encode($error);
    }
}

}

