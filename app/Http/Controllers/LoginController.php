<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use Validator;
use App\CustomValidation;
use Redirect;
class LoginController extends Controller
{
     

  public function checklogin(Request $request){

  
if(!$request->session()->exists('id')){
               return view('login');
       }else{
                return redirect('/dashboard');
}

}

   public function login(Request $request){

			    $validator = Validator::make($request->all(), [
			    'email' => 'required|max:100',
			    'password' => 'required|max:100',
			    ]);

			   if ($validator->fails()) {
			    return redirect('/')
			    ->withErrors($validator)
			    ->withInput();
			   }else{
          
 

                $query=DB::select('call sp_user_login(?,?)',array($request->email,$request->password));
               
                   

             if($query){
             	$val=$query[0];
				$request->session()->flush();
		        $request->session()->put('id',$val->id);
		        $request->session()->put('name',$val->name);
		        $request->session()->put('password',$val->password); 
		        $request->session()->put('email',$val->email);
				// $request->session()->put('userid',$val->userid);
				// $request->session()->put('username',$val->username);
				// $request->session()->put('empcode',$val->empcode);
				// $request->session()->put('groupid',$val->groupid);
				// $request->session()->put('Is_Active',$val->Is_Active);
				// $request->session()->put('email',$val->email);
				                         
               return redirect()->intended('dashboard');
               }else{   Session::flash('msg', "Invalid email or password. Please Try again! ");

                         return Redirect::back();
               
                   }




           }
   }


  public function logout(Request $req) {
  $req->session()->flush();
   return redirect('/');
}



}
