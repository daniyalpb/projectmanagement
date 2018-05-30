<?php

namespace App\Http\Middleware;

use Closure;

class CredentialMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$request->session()->exists('empcode')){
           
           return redirect('/');
         }else{

            return $next($request);
         } 

    }
}
