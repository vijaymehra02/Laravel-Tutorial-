<?php

use Illuminate\Support\Facades\Route;


Route::view('about','about')->name('ab');

Route::get('/', function () {
    return view('home');
});
Route::get('ab', function () {
    return view('about');
});
Route::get('contect', function () {
    return view('contect_us');
});
Route::get('profile/{name}', function ($name) {
    return view('profile',['name'=>$name]);
});
Route::redirect('home','/');
Route::redirect('home/welcome','/');

