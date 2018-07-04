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
class BillingController extends Controller
{

	public function createinvoice()
	{
		$users=DB::select("call usp_state_master()");
		$selects=DB::select("call usp_get_bankmaster()"); 
		$selectInvoiceDetails= DB::select("call USP_Load_CreditBank()");
		$GstState=DB::select("call UspDispGST_State()");

		return view('create-invoice',['users'=>$users,'selects'=>$selects,'selectInvoiceDetails'=>$selectInvoiceDetails,'GstState'=>$GstState]);
	}

	public function getbankdetails(Request $req)
	{

		$bnkdtls =DB::select("call UspDispCredit_BankDetails(?)",array($req->RupeeBankName));

		return json_encode($bnkdtls);

	}

	public function getstategstno(Request $req)
	{
		
			$Getstategstno=DB::select("call UspDispGST_State_No(?)",array($req->gststate));
			return json_encode($Getstategstno);
	}


	public function brokerinvoice()
	{
		return view('create-broker-invoice');
	}

	public function brokerinvoiceregister()
	{
		return view('broker-invoice-register');
	}
	public function ClientList(Request $req)
	{
	    $ClientList =DB::select("call UspDispLoanClient(?,?,?)",array($req->fromdate,$req->todate,$req->id));
		return $ClientList;
	}
	public function Leadid(Request $req)
	{

		// print_r($req->all());
		$Leadid= DB::select("call UspDispLeadID(?,?,?,?)",array($req->client_name,$req->fromdate,$req->todate,$req->id));
		return $Leadid;
	}
}