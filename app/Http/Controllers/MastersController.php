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
class MastersController extends Controller
{

   //**employee-master** 

	public function aspxdata()

	{

		$shows=DB::select("call usp_get_company_master()");
		$users=DB::select("call usp_get_Reporting_master()");
		$selects=DB::select("call usp_get_designation_master()");
		$insert=DB::select("call usp_get_department_master()");
		return view ('employee-master',['shows'=>$shows,'users'=>$users,'selects'=>$selects,'insert'=>$insert]);



	}

	public function employ_master(Request $req)
	{
		DB::statement("call usp_empolyeemaster_insert(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",array($req->empname,$req->empcode,$req->companyname,$req->email,$req->address,$req->dob,$req->mobile,$req->department,$req->reporting_authority,$req->date_of_joining,$req->designation,$req->band,$req->Is_Active,$req->ctc,$req->variable));
		return Redirect('employe-master');
	}



    //**bank-master** 

    public function bankmaster()
	{
		$smsdata=DB::select("call usp_get_bankmaster()");
		return view('bank-master',['smsdata'=>$smsdata])->with('no', 1);
		
	} 


	public function bank_master(Request $req)
	{

		//print_r($req->all()); exit();

		 DB::statement("call Bank_Master_Insert(?,?,?,?,?)",array($req->Bank_Name,$req->Bank_Address,$req->Bank_Code,$req->Document1,$req->Document2));
		 return Redirect('bank-master');

	}



	public function bank_master_edit(Request $req)
	{
		//print_r($req->all());exit();
		 DB::select("call bank_Master_edit(?,?,?,?,?,?)",array($req->Pop_Bank_Id,$req->Pop_Bank_Name,$req->Pop_Bank_Address,$req->Pop_Bank_Code,$req->Pop_Document1,$req->Pop_Document2));
		 return Redirect('bank-master');

	}

     //**break-master** 

	public function breakmaster()
	{
		$smsdata=DB::select("call usp_get_breakmaster()");

		return view('break-master',['smsdata'=>$smsdata]);
	}

	public function break_master(Request $req)
	{
		 DB::statement("call break_time_master_Insert(?,?,?)",array($req->Break_Type,$req->Time,$req->Is_Active));
		return Redirect('break-master');
	}

     //**state-master** 


	public function statemaster()
	{

		$smsdata=DB::select("call usp_state_master()");


		return view('state-master',['smsdata'=>$smsdata]);
	}


	public function state_master(Request $req)
	{
		DB::statement("call state_masterstate_Insert(?,?)",array($req->state_name,$req->Is_active));
		return Redirect('state-master');
	}


     //**city-master**
	public function citymaster()
	{
		$users=DB::select("call usp_get_statemaster()");
		$smsdata=DB::select("call usp_get_citymaster()");
		return view('city-master',['users'=>$users,'smsdata'=>$smsdata])->with('no', 1);
	}

	public function city_master(Request $req)
	{
		DB::statement("call city_master_city_Insert(?,?,?)",array($req->city_name,$req->state_id,$req->is_active));
		return Redirect('city-master');
	}


       //**designation-master**
	public function designationmaster()
	{
	   	$smsdata=DB::select("call usp_get_designation_master()");
		return view('designation-master',['smsdata'=>$smsdata])->with('no', 1);
	}

	public function designation_master(Request $req)
	{
	//print_r($req->Designation_Id); exit();
		DB::statement("call designation_Master_edit(?,?)",array($req->Designation_Id,$req->Designation));
		return Redirect('designation-master');
	}


	  //**employe-list**

	public function employelistmaster()
	{
		$smsdata=DB::select("call usp_get_emplistmaster()");
		return view('employe-list',['smsdata'=>$smsdata])->with('no', 1);
	}





       //**edit-employe-list**
	public function edit_employelist_master()
	{	
		return view('edit-employe-list');
	}

	public function table_edit($id)
	{
		$shows=DB::select("call usp_get_company_master()");
		$updates=DB::select("call usp_get_Reporting_master()");
        $masters=DB::select("call usp_get_designation_master()");
        $insert=DB::select("call usp_get_department_master()");
        $band=DB::select("call usp_get_employee_masterband()");
        $user= DB::select("call usp_show_empolyee_list(?)",array($id))[0];
        //print_r($user); exit();
        return view('edit-employe-list',['shows'=>$shows,'user'=>$user,'updates'=>$updates,'masters'=>$masters,'insert'=>$insert,'band'=>$band]);
    }






	public function employe_master_editlist(Request $req)
	{
		//print_r($req->all());exit();
		 DB::select('call employee_Master_update(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',array($req->u_EmpId,$req->u_empname,$req->u_empcode,$req->u_companyname,$req->u_email,$req->u_address,$req->u_dob,$req->u_mobile,$req->u_department,$req->u_reporting_authority,$req->u_date_of_joining,$req->u_designation,$req->u_band,$req->u_Is_Active,$req->u_ctc,$req->u_variable));
		 return Redirect('employe-list');

	}



       //**lead status master
    public function leadstatusmaster()
    {
    	$users=DB::select("call usp_get_leadstatus_master()");
		return view('leadstatus-master',['users'=>$users]);
	}

	public function leadstatus_master(Request $req)
	{
		DB::statement("call lead_statusmaster_Insert(?,?)",array($req->Lead_Status,$req->Is_Active));return Redirect('leadstatus-master');
	}

       //**product master
	public function productmaster()
	{
		$users=DB::select("call usp_get_product_master()");
		return view('product-master',['users'=>$users]);
	}
	public function product_master(Request $req)
	{
		DB::statement("call product_master_Insert(?,?,?)",array($req->Product_Name,$req->Is_Active,$req->Document));
		return Redirect('product-master');
	}

//**profession master
	public function professionmaster()
	{
		$users=DB::select("call usp_get_professionmaster()");
		return view('profession-master',['users'=>$users]);
	}
	public function profession_master(Request $req)
	{
	//print_r($req->all());exit();
		DB::statement("call profession_master_Insert(?,?)",array($req->Profession_Name,$req->Is_Active));
	   	return Redirect('profession-master');
	}

//**Role master
	public function rolemaster()
	{
		return view('role-master');
	}

//**Associate-Master
	public function associatemaster()
	{
		$smsdata=DB::select("call usp_get_product_master()");
		$lead=DB::select("call usp_get_leadcity_master()");
		return view('associate-master',['smsdata'=>$smsdata,'lead'=>$lead])->with('no', 1);
	}

//**Link-Entry
	public function messagelinkdetail()
	{
		return view('link-entry');
	}
	public function message_link_detail(Request $req)
	{
	//print_r($req->all());exit();
		DB::statement("call msg_link_details_Insert(?,?,?)",array($req->link,$req->MsgBody,$req->title));
	   	   Session::flash('message', 'City saved successfully');
	   	return Redirect('link-entry');
	}

//**App-Version-Master
	public function appversionmaster()
	{
		$users=DB::select("call usp_get_app_versionmaster()");
		return view('app-version-master',['users'=>$users])->with('no', 1);
	}
	public function app_version_master(Request $req)
	{
	//print_r($req->all()); exit();
		DB::statement("call app_version_Master_edit(?,?)",array($req->App_Type_Name,$req->Version_Code));
	   		return Redirect('app-version-master');
	}
	public function appversionmaster_history()
	{
		$users=DB::select("call usp_get_Version_History_Master()");
	        return view('app-version-master-history',['users'=>$users]);
	}


	   // public function history($id)
	   // {
	   // 	//print_r($Id);exit();
	   // 	// $users=DB::select("call usp_get_Version_Master_History_table()");
	   // 	// return view('app-version-master-history',['users'=>$users])->with('no', 1);
    //      echo $id;exit();	   	
    //      $query = DB::table('app_version_master')->select('Id', 'App_Type_Name', 'Version_Code', 'Created_Datetime')->where('Id','=',$Id)->get();
	   // 	// print_r($query);exit();
    //      return view('app-version-master-history',['query'=>$query]);
	   // }

	   
//**Loan-Disbursement
	public function loandisbursement()
	{
		return view('loan-disbursement');
	}
}