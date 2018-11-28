<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminMiddleware
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
		$session_user = Session::get('username');
		if($session_user != 'admin'){
			return redirect('/login');
		}
		
        return $next($request);
    }
}
