<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('base');

Route::get('/login', 
[App\Http\Controllers\login::class, 'login'
])->name('login');

Route::get('/register', 
[App\Http\Controllers\register::class, 'register'
])->name('register');

Route::get('/myphonebook', 
[App\Http\Controllers\MyphonebookController::class, 'createnewcontact'
])->name('myphonebook');


Route::get('/check', 
[App\Http\Controllers\MyphonebookController::class, 'check'
])->name('check');
