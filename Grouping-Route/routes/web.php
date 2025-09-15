<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserCntroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout',action: [usercontroller::class,'logoout']);

Route::prefix('profile')->group(function(){

    Route::view('/','profile');
    Route::get('user-details',action: [usercontroller::class,'userdetails']);
    Route::get('deshboad',[usercontroller::class,'deshboad']);
});

Route::controller(usercontroller::class)->group(function(){
    Route::get('show','show');
    Route::get('delete','delete');
    Route::get('about/{name}','about');
});
