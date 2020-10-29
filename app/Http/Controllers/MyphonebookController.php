<?php

namespace App\Http\Controllers;

use App\Models\active_users;
use App\Models\myphonebook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\URL;

class MyphonebookController extends Controller
{
    //
    function createnewcontact(Request $request) {
        if($request->all() && $request->input('button') == 'Create Contact') {
            $mpb = new myphonebook();
            $mpb->name = $request->input('name');
            $mpb->contact = $request->input('contact');
            $mpb->user_id = session('current_user_id');
            $mpb->save();
            echo 'Contact saved successfully';
        }
        else if($request->input('button') == 'Log out') {
            session(['current_user_id' => '']);
            $active_user = active_users::where('token', '=', session('token'))->first();
            $active_user->delete();
            session(['token' => '']);
        }
        else if($request->input('button') == 'View My Contacts') {
            $contacts = myphonebook::where('user_id', '=', session('current_user_id'))->get();
            return view('contacts', compact('contacts'));
        }
        return view('phonebook');
    }
}
