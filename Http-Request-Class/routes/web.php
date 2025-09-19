<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/form', function () {
    return view('form');
});

Route::post('/login',[usercontroller::class,'seccess']);


