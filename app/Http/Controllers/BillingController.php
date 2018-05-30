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
		return view('create-invoice',['users'=>$users,'selects'=>$selects]);
	}

	public function brokerinvoice()
	{
		return view('create-broker-invoice');
	}

	public function brokerinvoiceregister()
	{
		return view('broker-invoice-register');
	}

}
