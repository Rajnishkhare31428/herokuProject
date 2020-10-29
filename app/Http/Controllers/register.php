<?php

namespace App\Http\Controllers;

use App\Models\active_users;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class register extends Controller
{
    //
    function register(Request $request) {
        // echo 'GOT INTO THE REGISTER FUNCTION';
        // var_dump($request);
        // echo $request->input('name');
        if($request->all()) {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('userpassword');
            $user->contact = $request->input('contact');
            $user->save();
            session(['current_user_id' => $request->input('email')]);
            $token = Str::random(60);              
            session(['token' => $token]);
            $active_user_tupple = new active_users();
            $active_user_tupple->token = $token;
            $active_user_tupple->email = $request->input('email');
            $active_user_tupple->save();
            return view('phonebook');
        }
        return view('register');
    }
}