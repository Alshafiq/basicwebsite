<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;
use Session;

class loginController extends Controller
{
    public function login(Request $request)
	{
		$username = $request->input('name');
		$password = $request->input('password');
		
		$checkLogin = DB::table('users')->where(['name'=>$username,'password'=>$password])->get();
		if(count($checkLogin)>0)
		{
			Session::put('username', $username);
			return redirect('/')->with('success','Success login.');
		}
		else
		{
			Session::put('username', '');
			return redirect('/login')->with('fail','Fail login.');
		}
	}
}
