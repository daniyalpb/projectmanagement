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
class VivekController extends Controller
{
	public function vivek(){
		return view('vivek');

	}
	 
     }