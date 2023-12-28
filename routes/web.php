<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::view('/registration', 'components.auth.registration');
//Route::view('/userlogin', 'components.auth.login');
Route::view('/dashboard', 'components.dashboard.profile');



//Route url
Route::post('/registration', [Usercontroller::class, 'userRegistration']);
Route::post('/login', [Usercontroller::class, 'login']);
Route::get('/dashboard', [Usercontroller::class, 'dashboard']) ->middleware('tokenVerify');



