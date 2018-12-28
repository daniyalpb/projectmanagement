<?php

namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cache;
use App\CustomValidation;

class OpenIssueController extends Controller
{
 public function open_issue(){
   $data=DB::select("call assign_bug_activiy()");

   return view('openissues',['data'=>$data])->with('no',1);
    }


public function open_issueview($id){
    $user=DB::select("call usp_get_bug_details($id)");
   return view('openissues-view',['user'=>$user])->with('no',1);

}

public function openis(){
    $users=DB::select("call sp_load_done_bug()");
   return view('open-issues',['users'=>$users])->with('no',1);

}



public function openbug(){
    $userss=DB::select("call sp_load_open_bug()");
   return view('open-bug-issue',['userss'=>$userss])->with('no',1);

}


public function view_recently(){
    $view=DB::select("call sp_load_view_recenty()");
   return view('view-recently',['view'=>$view])->with('no',1);

}


public function recently_resolved(){
    $query=DB::select("call sp_load_recently_resolved()");
   return view('recently-resolved',['query'=>$query])->with('no',1);

}


public function view_all_bug(){
    $allbug=DB::select("call sp_load_view_all_bug()");
   return view('view-all-bug',['allbug'=>$allbug])->with('no',1);

}


public function task_unrelesed(){
    $unrelesed=DB::select("call sp_load_unrelesed_master()");
   return view('unrelesed',['unrelesed'=>$unrelesed])->with('no',1);

}




}

