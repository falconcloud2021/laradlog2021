<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdminFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if($request->route()->getName() != 'login'){
    //       if (!$request->hasSession()){
    //         return redirect()->to('amonitor/loginadm');
    //         }
    //         $login = $request->input('login');
    //         $password = $request->input('password');
    //         $adminLogin = $request->session()->get('login');
    //         $adminPassword = $request->session()->get('password');

    //         $isAdmin = ($login == $adminLogin and $password = $adminPassword) ? true : false;

    //         if(!$isAdmin) {
    //             return redirect()->to('amonitor/loginadm');
    //         }  
    //     }
        
    //     return $next($request);
    // }
}
