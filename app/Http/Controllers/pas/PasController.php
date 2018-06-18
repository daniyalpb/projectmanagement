<?php

namespace App\Http\Controllers\pas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Keygen;
use Mail;
class PasController extends Controller
{
       public function emp_details(){   


              $query=DB::table('Group_Master')->get();

       	      return view('pas.emp_details',['query'=>$query]);
       }

         public function pas_registrar(){

              
              // $query=DB::table('pas_master')->get();
               $query=DB::select('call sp_assign_pas(?)',[10]);
                
       	      return view('pas.pms_form',['query'=>$query]);
       }



 
       public function pas_insert(Request $req){
       // $id = Keygen::numeric(8)->generate();
       
 // DB::table('pas_approval')->delete();
 // DB::table('pas_details')->delete(); exit;
         
                
                $id=DB::table('pas_approval')->insertGetId([
                                                            'emp_id'=> Session::get('empcode'),
                                                            'dept_id'=>Session::get('department_Id'),
                                                            'design_id'=>Session::get('designation_Id'),
                                                            'year'=>2018,
                                                            'create_on'=>date('Y-m-d H:i:s'), 
                                                             
                                                            ]);
                           

       	       foreach ($req->aps_id as $key => $value) {
                          DB::table('pas_details')->insert([
                                                          
                                                            'pas_id'=>$value,
                                                            'weightage'=>$req->weightage[$key],
                                                            'points'=>$req->points[$key],
                                                            'score'=>$req->score[$key],
                                                            'rating'=>$req->rating[$key],
                                                            'app_id'=>$id,
                                                            ]);

                 


               }

                  






        
       }



       public function pms_details(){

                $query=DB::select('call sp_pas_approval(?)',[Session::get('empcode')]);
                return view('pas.pms_details',['query'=>$query]);
       }


       public function pas_data(Request $req){

             
                return DB::select('call sp_pas_details(?)',[$req->ap_id]);
       }
}
