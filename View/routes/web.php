<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserCntroller;

Route::get('/' ,function(){
    return view('wellcom');
});

Route::get('/home',[UserCntroller::class,'userhome']);
Route::get('/about',[UserCntroller::class,'userabout']);
Route::get('/auther',[UserCntroller::class,'auther']);
