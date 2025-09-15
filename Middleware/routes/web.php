<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'home',[UserController::class,'home'
])->middleware('checkAge');

