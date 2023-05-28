<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class AuthController extends Controller
{
    public function login(){
        return view('front.login');
    }

    public function registration(){
        return view('front.register');
    }


    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('customer')->attempt($credential)) {
            return redirect()->route('home');
        } else {            
            return redirect()->back()->with('error', 'Information is not correct!');
        }
    }



    public function registration_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required',
            'confirm_password' =>'required|same:password'
        ]);


        $password = Hash::make($request->password);

        $obj = new Customer();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->password = $password;
        $obj->save();

        return redirect()->back()->with('success_message', 'To complete the signup, please check your email and click on the link');

    }


    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('login');
    }
}
