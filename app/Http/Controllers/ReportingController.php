<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use Response;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
class ReportingController extends Controller
{

	public function leadassignreport()
	{
		return view('lead-assign-report');
	}

	public function calltrackingreport()
	{
		return view('call-tracking-report');
	}

	public function smslinkreport()
	{
		return view('sms-link-report');

	}

	public function dailyfollowupreport()
	{
		$leaddata=DB::select("call usp_get_df_lead_data()");
		$empmass=DB::select("call usp_get_df_emp_master()");
		return view('daily-followup-report',['leaddata'=>$leaddata,'empmass'=>$empmass]);
	}

	public function leadreport()
	{
		$source=DB::select("call usp_get_source_master()");
		return view('lead-report',['source'=>$source]);
	}

	
}
