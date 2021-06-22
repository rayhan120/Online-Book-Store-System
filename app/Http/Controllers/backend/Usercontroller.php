<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  //passad add for auth
use App\Models\user;

class Usercontroller extends Controller
{
    
   public function loginform()
       {

              return view ('backend.layouts.login');

       }

       public function dologin(Request $request)
       {

        //dd($request->all());
        $request->validate([
   
            'email'=>'required|email',
            'password'=>'required|min:6'
   
            ]);
   
            $loginData=$request->only('email','password');
   // $logindata=$request->only('email','password');
            //dd($logindata);
   
         if(Auth::attempt($loginData))
   
         
         {
   
            return redirect()->route('master')->with('success','User login Success.');
   
         }
   
         return back()->withErrors([
            'email' => 'Invalid credentials.',
         ]);
        
       }

       public function logout()
      {

         Auth::logout();

        return redirect()->route('admin.login')->with('success','Logout successful.');

      }

      public function reguser()
      {
         $reguser=user::all();
         return view('backend.reg_user',compact('reguser'));
      }




}
