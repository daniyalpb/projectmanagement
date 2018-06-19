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
class ActivityController extends Controller
{

	public function dailyplanning()
	{
		$smsdata=DB::select("call usp_get_daily_planning()");
		return view('daily-planning',['smsdata'=>$smsdata])->with('no', 1);
	}


	public function daily_planning(Request $req)
	{
		//print_r($req->all());exit();
		DB::statement("call Insert_daily_planning(?,?,?,?,?)",array($req->Plan_Date,$req->StartTime,$req->EndTime,$req->User_Remark,$req->User_Achieve));
		return Redirect('daily-planning');
	}




	public function daily_planning_edit(Request $req)
	{
		//print_r($req->all());exit();
		$data = DB::select("call Update_daily_planinning(?,?,?,?,?,?)",array($req->Pop_Id,$req->Pop_Plan_Date,$req->Pop_StartTime,$req->Pop_EndTime,$req->Pop_User_Remark,$req->Pop_User_Achieve));
		 return $data;
		}




	public function leadcapture()
	{
		$users=DB::select("call usp_get_professionmaster()");
		$selects=DB::select("call usp_vertical_master()");
		$lead=DB::select("call usp_get_leadcity_master()");
		$assign=DB::select("call usp_get_assign_master()");
		return view('lead-capture',['users'=>$users,'selects'=>$selects,'lead'=>$lead,'assign'=>$assign]);
	}

	public function registrationreport()
	{
		$users=DB::select("call usp_get_company_master()");
		return view('registration-report',['users'=>$users]);
	}

	public function campaignwisereport()
	{
		$users=DB::select("call usp_get_source_master()");
		return view('campaign-wise-report',['users'=>$users]);
	}
	public function creditcardentry()
	{   
		$bank=DB::select("call usp_get_bankmaster()");
		$product=DB::select("call usp_get_product_master()");
		$city=DB::select("call usp_get_citymaster()");
		$profession=DB::select("call usp_get_professionmaster()");
				
		return view('credit-card-entry',['bank'=>$bank,'product'=>$product,'city'=>$city,'profession'=>$profession]);
	}


}
