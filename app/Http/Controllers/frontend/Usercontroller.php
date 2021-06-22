<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;  //passad add for auth

class Usercontroller extends Controller
{
   
   public function registrationform()
   {

   return view('frontend.layout.registration');
       }

    public function register(Request $request)
         {

   //dd($request->all());
  

   //validate is a array
   $request->validate([


      //for rule

      'name'=>'required',
       //serch for validation rules
      'email'=>'required|email|unique:users',
      'password'=>'required|min:6',
      

   ]);
    User::create([


    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>bcrypt($request->password),
    
    
    

    ]);

    
    return redirect()->back()->with('success','Use registation Succesfully.');
   
        }

//login
  public function loginform()
   {

   //dd("login");
   return view('frontend.layout.login');

   }

   public function dologin(Request $request)
   {
        
      $request->validate([
   
         'email'=>'required|email',
         'password'=>'required|min:6'

         ]);

         $loginData=$request->only('email','password');
// $logindata=$request->only('email','password');
         //dd($logindata);

      if(Auth::attempt($loginData))

      
      {

         return redirect()->route('website')->with('success','User login Success.');

      }

      return back()->withErrors([
         'email' => 'Invalid credentials.',
      ]);

      }



      public function logout()
      {

         Auth::logout();

        return redirect()->route('login.form')->with('success','Logout successful.');

      }


      //edit user

      public function edituser($id)
         {

            //$catagory_loop=Manu::all();
            $users=User::find($id);
            //dd($users);
           //get all data of for this id
           //pass data to a view

           return view('frontend.layout.user_edit',compact('users'));
         }
         
         public function updateuser(Request $request,$id)

         {

        User::find($id)->update([
            'name'=>$request->name,
                 'email'=>$request->email,
                 'password'=>$request->password
                 
                  
      

        ]);
        return redirect()->route('website');
           // return view
         }




}
