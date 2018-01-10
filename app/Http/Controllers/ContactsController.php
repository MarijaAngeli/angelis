<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactsController extends Controller
{
    public function index(){
        return view('pages.contact');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'name'=>'required|min:3|max:127',
    		'email'=>'required|email',
    		'message'=>'required|max:1000'
    	]);
    	// $contact = new Contact;
    	// $contact->name = $request->input('name');
    	// $contact->email = $request->input('email');
    	// $contact->message = $request->input('message');
    	// $contact->save();
    	// return back()->with('success','Poruke je poslata!');
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message 
        );
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('af30391b88-0f93fd@inbox.mailtrap.io');
        });
        return back()->with('success','Poruke je poslata!');
    }
}
