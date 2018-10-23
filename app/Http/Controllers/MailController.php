<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function store(Request $request) {
        Validator::make($request->all(), [
            'email' => 'required|email'
        ])->validate();

        $email = new Mail;
        $email->email = $request->email;
        $email->save();

        return back()->with('success', 'Subscribed successfully');
    }
}
