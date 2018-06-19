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
class bank_contact_detailsController extends Controller 
{
	public function bankdetails()
	{
		$bank=DB::select("call usp_get_bankmaster()");
		$product=DB::select("call usp_get_product_master()");
		return view('bank-contact-details-new',['bank'=>$bank,'product'=>$product]);
	}

}