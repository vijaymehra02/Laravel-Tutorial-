<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('uploadform','upload');

Route::post('upload',[ImageController::class,'upload']);

Route::get('images',[ImageController::class,'list']);


