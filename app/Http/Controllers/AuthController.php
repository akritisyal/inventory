<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function handlelogin(Request $request)
    {
        $this->validate($request, User::$rules);
        $data=$request->only('email','password');
        //$status=$request->only('status');
        if(\Auth::attempt($data))
        {
            $data=User::where(['email'=>$data['email']])->first();
            $request['g-recaptcha-response'] = new Captcha();

            if($data['status']==1)
            return redirect()->route('switchapps');

        }
        return back()->withInput()->withErrors([
            'email' => 'Username or password incorrect'
        ]);
    }



    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }


    public function showChangePasswordForm()
    {
        return view('auth.resetPassword');
    }

    public function resetpassword(Request $request){
 
        if (!(Hash::check($request->get('current-password'), \Auth::user()->password))) {
             return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
             return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:3|confirmed',
        ]);
 

        $user = \Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("success","Password changed successfully !");
 
    }


}