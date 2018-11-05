<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MailController as MailController;


class HelperController extends Controller
{
    protected $mail;

    public function __construct(){
        $this->mail = new MailController;
    }
    
    public function sendMail($params){
        return $this->mail->sendMail($params);
    }
}
