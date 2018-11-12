<?php

namespace App\Http\Controllers;
use Auth;
use Image;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function profile ()
        
        {

     	return view ('profile', array('user' => Auth::user ()) );
         
        }




        public function  update_avatar(Request $request)
     { 
     	//handle the user avatar 
         if($request->hasFile('avatar'))
         {
         	$avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

       Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

         	$user = Auth::user();
         	$user->avatar = $filename;
         	$user->save();
         }
         
        return view ('profile', array('user' => Auth::user ()) );
     }

     public function pay () 
     {
        return view('pay');
     }
     
}
