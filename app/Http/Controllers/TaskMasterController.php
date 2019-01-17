<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class TaskMasterController extends Controller{
  public function task_master()
  {
    $query=DB::select("call sp_load_task_details()");
        $taskcategory=DB::select("call sp_load_task_category()");

     $states = DB::table("project_master")->select("project_name","id")->get();
        return view('task-master',['states'=>$states,'query'=>$query,'taskcategory'=>$taskcategory]);
        }
       public function task_masterajax($id)
       {
      $cities = DB::table("Module_Master")
       ->where("ProjectId",$id)
       ->select("Module_Name","id")->get();
      return json_encode($cities);
        


    }
    public function taskmasterAjaxnew($module_id)
    {
    $task = DB::table("task_master")
    ->where("ProjectId",$module_id)
    ->select("Task_Name","module_id")->get();
    return json_encode($task);
    }


   public function projects(Request $req){
   $projectnew=DB::select('call sp_insert_project_master(?,?,?,?,?,?)',array($req->state,$req->city,$req->task,$req->SubTask,$req->remark,$req->task_category));
   return $projectnew;
   }


  public  function add_task(Request $req){

  //print_r($req->all());exit();
 $project=DB::select('call sp_insert_project(?,?)',array($req->savepname,$req->projectids));
 return $project;
 }


public  function add_module(Request $req){
  //print_r($req->all());exit();
 $module=DB::select('call sp_insert_module(?,?)',array($req->savepname1,$req->state_ID));
 return $module;
}


public  function add_tasknew(Request $req){
//print_r($req->all());exit();
 $task=DB::select('call sp_insert_task(?,?,?)',array($req->savepname2,$req->Task_ids,$req->city));
 return $task;
}
}
