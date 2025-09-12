<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;



Route::get('/',[usercontroller::class,'userwelcome']);
Route::get('/home',[usercontroller::class,'userhome']);
Route::get('/about',[usercontroller::class,'userabout']);
