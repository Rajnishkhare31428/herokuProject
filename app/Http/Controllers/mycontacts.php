<?php

namespace App\Http\Controllers;

use App\Models\myphonebook;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class mycontacts extends Controller
{
    //
    function showcontacts(Request $request) {
        if(session('current_user_id') != '') {
            echo 'you are logged in';
            $contacts = myphonebook::where('user_id', '=', session('current_user_id'))->get();
            return view('contacts', compact('contacts'));
        }
        else {
            Route('login');
        }
    }
}
