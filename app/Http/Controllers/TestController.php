<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
       

public   function testfn(){


              $query=DB::select("call insertemp()");


       	     return view('test',['query'=>$query]);
     }



       public function insert(Request $res){
           

                  

                  DB::table('emp')->insert(['name'=>$res->name]);


                  return redirect('test/demo');


       }

}
