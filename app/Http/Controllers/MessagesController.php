<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
		$this->validate($request,[
		'name'=>'required',
		'email'=>'required',
		'message'=>'required'
		]);
		
		//create new message
		$message = new Message;
		$message->name = $request->input('name');
		$message->email = $request->input('email');
		$message->message = $request->input('message');
		
		//save Message
		$message->save();
		
		//Redirect
		return redirect('/')->with('success','Note saved.');
	}
	
	public function getMessages(){
		//$messages = Message::all();
		$messages = Message::orderBy('ID')->paginate();//paginate is to limit item per page
		return view('messages')->with('messages',$messages);
	}
}
