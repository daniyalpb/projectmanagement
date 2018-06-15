<?php

namespace App\Http\Controllers\pas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Keygen;
class PasController extends Controller
{
       public function emp_details(){


              $query=DB::table('Group_Master')->get();

       	      return view('pas.emp_details',['query'=>$query]);
       }

         public function pms_details(){

              
              // $query=DB::table('pas_master')->get();
            $query=DB::select('call sp_assign_pas(?)',[10]);
                
       	      return view('pas.pms_details',['query'=>$query]);
       }



 
       public function asp_insert(Request $req){
       // $id = Keygen::numeric(8)->generate();
        $empcode=Session::get('empcode');
     
 // DB::table('pas_approval')->delete();
 // DB::table('pas_details')->delete(); exit;
         
                
                $id=DB::table('pas_approval')->insertGetId([
                                                            'emp_id'=> $empcode,
                                                            'dept_id'=>0,
                                                            'design_id'=>0,
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
}
