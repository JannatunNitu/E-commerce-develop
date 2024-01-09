<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    function ShowProfile()
    {
        return view('Backend.profile.profile');
    }

    // *UPDATE PROFILE
    function UpdateProfile(Request $request){
        // dd($request->all());
        // VALIDATION
        $request->validate(
            [
               'name' => 'required|max:30',
               'email' => 'required|email|unique:users,email,'.auth()->user()->id,
               'phone' => 'nullable',
               'profile_img' => 'nullable|mimes:jpg,png'
            ],
            [
                'name.required' => "Enter your full name",
                'email.required' => 'The email has already taken',
                'phone.required' => "Enter your Phone Number",
            ]

        );
        
        
        //*USER DATA UPDATE
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->number = $request->number;
        $user->email = $request->email;
        $user->save();
        return back();

    }
    function UpdateProfileImage(Request $request){
        // *IMAGE DATA UPDATE
        if($request->hasFile('profile_img')){  
            // dd(auth()->user()->name);
            $ext = $request->profile_img->extension();
            $img_name = auth()->user()->name . '-' . Carbon::now()->format('d-m-y-h-m-s') . '.' .$ext ;
            $request->profile_img->storeAs('users',$img_name,'public');
            // $request->profile_img->store('users', $img_name, 'public');
        }
        $user = User::find(auth()->user()->id);
        $user->profile_img = $img_name;
        $user->save();
        return back();

    }

    // SHOW PASSWORD
    function ShowPassword(){
        return view('Backend.profile.PasswordUpdate');
    }

    function UpdatePassword(Request $request){
        $request->validate([
            'old' => 'required|current_password',
            'password' => 'required|confirmed|different:old',
            'password_confirmation' => 'required'
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return back();
    }
 
    




}

