<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class pagesController extends Controller
{
	public function getLogin(){
		return view('login');
	}
	
	public function getLogout(){
		if(Session::get('username')!=''){
			Session::put('username', '');
			return redirect('/')->with('logout','User logout.');
		}
		return redirect('/');
	}
	
    public function getHome(){
		return view('home');
	}
	
	public function getAbout(){
		return view('about');
	}
	
	public function getContact(){
		return view('contact');
	}
}
