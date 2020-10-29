<?php

namespace App\Http\Controllers;

use App\Models\active_users;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class login extends Controller
{
    //
    function check() {

    }
    function login(Request $request) {
        echo 'Login method from login controller is called';
        if($request->all()) {
            $username = $request->input('username');
            $userpassword = $request->input('userpassword');
            echo "user id = $username and password = $userpassword";
            $user = User::where([['email', '=', $username], ['password', '=', ($userpassword)]])->first();
            if($user) {
                echo 'Your have been logged in';

                session(['current_user_id' => $username]);
                $token = Str::random(60);
                session(['token' => $token]);
                $active_user_tupple = new active_users();
                $active_user_tupple->token = $token;
                $active_user_tupple->email = $username;
                $active_user_tupple->save();

                return view('phonebook');
            }
            else {
                echo 'credentials dont match';
                return view('login');
            }
        }
        else {
            echo 'Your request is empty';
        }
        return view('login');
    }
}
