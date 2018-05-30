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
class UsersController extends Controller
{

	public function usergroup()
	{
		return view('user-group');		
	}

	public function usermaster()
	{
		$shows=DB::select("call usp_get_Group_Master()");
		$selects=DB::select("call usp_get_company_master()");
		return view('user-master',['selects'=>$selects,'shows'=>$shows]);
	}

	public function userrights()
	{
		$selects=DB::select("call usp_get_usr_login()");
		return view('user-rights',['selects'=>$selects]);
	}

	public function search(Request $req)
	{
		print_r($req->all()); exit();
		return view('user-rights');
	}

	public function editmenu()
	{
		return view('edit-menu');
	}

	public function grouprights()
	{
		$shows=DB::select("call usp_get_Group_Master()");
		return view('group-rights',['shows'=>$shows]);
	}

	public function menumaster()
	{
		$module=DB::select("call usp_get_Module_menu_master");
		$menu_level=DB::select("call usp_get_level_menu_master()");
		$menu_sequence=DB::select("call usp_get_sequence_menu_master()");
		$menu_parent=DB::select("call usp_get_Parent_menu_master()");
		$menu_type=DB::select("call usp_get_Type_menu_master()");
		return view('menu-master',['module'=>$module,'menu_sequence'=>$menu_sequence,'menu_parent'=>$menu_parent,'menu_level'=>$menu_level,'menu_type'=>$menu_type]);
	}

	public function monthlytarget()
	{
		return view('monthly-target');
	}

}
