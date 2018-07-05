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
class DashBordController extends Controller
{
	public function dashboardreport()
	{
	    $company=DB::select("call usp_get_company_master()");
		return view('dashboard-report',['company'=>$company]);
	}



     public function reportdashboard($fdate,$tdate)
    {
         
        $id=Session::get('Emp_Code');
        $reportlead=DB::select("call Usp_load_sales_employee('$fdate','$tdate','RB40000059','1000')");          
        return json_encode($reportlead);
          
          
    }




}