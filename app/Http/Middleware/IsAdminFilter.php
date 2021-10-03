<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdminFilter
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next)
	{
		if ($request->route()->getName() != 'login') {
			/*if (!$request->hasSession()) {
				return redirect()->to(url()->route('login'));
			}
			$login = $request->input('login');
			$password = $request->input('password');
			
			$user = session('user');
			
			$isAdmin = ($login == $user->login and $password == $user->password) ? true : false;

			if (!$isAdmin) {
				return redirect()->to(url()->route('login'));
			}*/
		}
		
		return $next($request);
	}
}
