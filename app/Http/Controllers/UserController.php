<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperController;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';    
    
    protected $faker;
    protected $helper;

    public function __construct(){
        $this->faker = \Faker\Factory::create();
        $this->helper = new HelperController;
    }

    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }

    public function regUser(Request $request){
        $message = [
            'email.unique' => 'Email is already registered'
        ];
        Validator::make($request->all(), [
            'email' => 'required|email|unique:users'
        ], $message)->validate();

        $input = $request->all();
        $data = $input['signup'];
        $user = new User;
        $user->content = json_encode($data);
        $user->username = $data['email'];
        $user->role = 'member';
        $user->avatar = $this->faker->imageUrl;
        $user->email = $data['email'];
        $user->password =  Hash::make($data['password']);
        $user->remember_token = str_random(rand(0,9));
        // Send Email to User
        $mailParams = [
            'Name' => $data['firstname']. " ". $data['lastname'],
            'Email' => $data['email'],
            'Subject' => 'Welcome Email - '. $data['firstname']. ' '. $data['lastname'],
            'Username' => $data['email'],
        ];

		if($user->save()){
            $sendMail = $this->helper->sendMail($mailParams);
            $output['status'] = "success";
            $output['data'] = "<center style='font-size: 13px;'><div class='col-md-12 alert alert-success text-center'>Signup Successful. <br> Your <b>Username</b> has been sent to your Email Address.</div></center>";
            return json_encode($output);
        } else {
            $output['failure'] = "<center style='font-size: 13px;'><div class='col-md-6 alert alert-danger text-center'>Registration Center Error. Please Try again!</div></center>";
            return $output['failure'];
        }
    }
}
