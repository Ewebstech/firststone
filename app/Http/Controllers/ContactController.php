<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\Contactmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function store(Request $request) {
        //validate the incoming request
        $this->validateRequest($request);
        
        try{
            //store the request
            $sendMessage = Contact::create($request->all());
        } catch(\Exception $e) {
            //TODO LOG EXCEPTION ERROR
            return back()->with('error', 'Something went wrong');
        }  

        if(!$sendMessage) {
            //there was an error
            return back()->with('error', 'Something went wrong');
        }
            //send contact mail
            Mail::to($request->email)->send(new Contactmail($sendMessage)); 
            //there was an error
            return back()->with('success', 'Message sent');
    }   

    public function validateRequest(Request $request) {
        //validate the incoming request
        Validator::make($request->all(), [
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10'
        ])->validate();
    }
}
