<?php

use App\Http\Controllers\home;
use App\Http\Controllers\mailcontroller;
use Illuminate\Support\Facades\Route;



Route::get('/',  [home::class,'fan1']);

Route::post('send-mail',[mailcontroller::class,'sendmail']);

Route::view('send-mail','send-email');
