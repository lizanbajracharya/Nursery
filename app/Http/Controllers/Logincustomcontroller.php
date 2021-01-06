<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class Logincustomcontroller extends Controller
{
    public function login(Request $request){
        if(Auth::attempt([
           dd( "'email'=> $request->email,
            'password'=> $request->password ")
        ]))
        {
            $user = User::where('email',$request->email)->first();
            if($user->is_admin())
            {              
                return redirect()->route('dashboard')->with('success','Login Success');
            }   
            else   {    
                return redirect()->route('welcome')->with('success','Login Success');
            
            }  
        }      
        return redirect()->back()->withErrors(['Login Failed','Invalid Password']);
}

    
    public function index()
    {
        return view('auth/login');
    }
}
