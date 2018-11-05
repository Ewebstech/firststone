<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Contract\Mailer;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    protected $mailer;

    public function __construct()
    {   
        $this->mailer = new Mail;
    }

    public function store(Request $request) {
        // $message = [
        //     'email.unique' => 'Email is already subscribed'
        // ];
        // Validator::make($request->all(), [
        //     'email' => 'required|email|unique:mails'
        // ], $message)->validate();

        // $email = new Mail;
        // $email->email = $request->email;
        // $email->save();

        // return back()->with('success', 'Subscribed successfully');'email' => 'unique:users,email_address,'.$user->id
    }

    public function sendMail($params)
    {
        //Grab uploaded file
        //$attach = $request->file('file');
        Mail::send('emails.register', $params, 
            function ($message) use($params)
            {
                $subject = $params['Subject'];
                $toAddress = trim($params['Email']);
                $FullName = $params["Name"];
                
                $fromAddress = "noreply@firststonerls.com";
                $replyTo = "info@firstonerls.com";
       
                //Attach file
                //$message->attach($attach);

                //Add a subject
                $message->subject($subject);

                $message->from($fromAddress, $name = "First Stone Real Estate Limited");

                $message->sender($fromAddress, $name = "First Stone Real Estate Limited");

                $message->to($toAddress, $name = $FullName);

                $message->replyTo($replyTo, $name = "First Stone Real Estate Limited");

                //$message->priority($level);
                //$message->attach($pathToFile, array $options = []);
            });
    }

}