<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use App\User;

class UserController extends Controller
{
    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    
    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }

    public function regUser(Request $request){
        $input = $request->all();
        $data = $input['signup'];
        $user = new User;
        $user->content = json_encode($data);
        $user->username = $data['email'];
        $user->email = $data['email'];
        $user->password = $this->hashdata($data['email']);
        $user->remember_token = str_random(rand(0,9));
        // Send Email to User

        // Send Email to Admin

		if($user->save()){
            $output['status'] = "success";
            $output['data'] = "<center style='font-size: 13px;'><div class='col-md-12 alert alert-success text-center'>Signup Successful. <br> Your <b>Username</b> and <b>Password</b> have been sent to your Email.</div></center>";
            return json_encode($output);
        } else {
            $output['failure'] = "<center style='font-size: 13px;'><div class='col-md-6 alert alert-danger text-center'>Registration Center Error. Please Try again!</div></center>";
            return $output['failure'];
        }
    }
}
