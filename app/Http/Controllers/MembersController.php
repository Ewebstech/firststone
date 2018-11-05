<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MembersController extends Controller
{
    public function index()
    {
       return view('members/index');
    }

    public function loginPage()
    {
       return view('members/login');
    }

    public function CheckLogin(Request $request)
    {
        
        $this->validate($request, [
            'username'    => 'required|min:3',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'username'    => $request->get('username'),
            'password' => $request->get('password')

        );

        if(Auth::attempt($user_data)){
            return redirect('/f-admin/dashboard');
        }
        else{
            return back()->with('error', 'Wrong Login Details');
        }
    } 

    function SuccessLogin(){
        return view('admin/dashboard');
    }

    function Logout(){
        Auth::logout();
        return redirect('/f-admin');
    }

}
