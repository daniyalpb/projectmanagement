<?php
namespace  App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

use App\TagList;
use Validator;
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
      $task=DB::select("call sp_load_task_master()");

      return view('home',['data'=>$data,'query'=>$query,'status'=>$status,'reporterdata'=>$reporterdata,'taguser'=>$taguser,'reporterassign'=>$reporterassign,'homes'=>$homes,'task'=>$task])->with('no',1);
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



public function about_us(){
  return view('about-us');
}


 public function addMore()
    {
        return view("addMore"); 
    }




    public function addMorePost(Request $req){
           
           foreach ($req->name as $key => $value) {
       

    $query= DB::select('call sp_insert_new_task_master(?,?,?,?)',[$req->name[$key],$req->Task_Name[$key],$req->Module_Name[$key],$req->SubTask[$key]]);
}



}




 public function myform()
    {
        $states = DB::table("demo_state")->lists("name","id");
        return view('myform',compact('states'));
    }


    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */
    public function myformAjax($id)
    {
        $cities = DB::table("demo_cities")
                    ->where("state_id",$id)
                    ->lists("name","id");
        return json_encode($cities);
    }





}


