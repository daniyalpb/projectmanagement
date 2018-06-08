<?php

namespace App\Http\Controllers\pas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PasController extends Controller
{
       public function emp_details(){


           $query=DB::table('Group_Master')->get();

       	      return view('pas.emp_details',['query'=>$query]);
       }

         public function pms_details(){


           

       	      return view('pas.pms_details');
       }




       public function asp_insert(Request $req){


       	 print_r($req->all());
        
       }
}
