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
class DashboardController extends Controller
{
     


               public function dashboard(){

                        
                        
 


                       return view('welcome');
               }



           public function   menu($userid,$parent_id=0){  
                    

           }





}
