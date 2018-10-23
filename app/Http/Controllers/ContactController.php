<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function store(Request $request) {
        //validate the incoming request
        $this->validateRequest($request);
        
        //store the request
        $sendMessage = Contact::create($request->all());
        if(!$sendMessage) {
            return back()->with('error', 'Something went wrong');
        }
            return back()->with('success', 'Message sent');
    }   

    public function validateRequest(Request $request) {
        //validate the request
        Validator::make($request->all(), [
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ])->validate();
    }
}
