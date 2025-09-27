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


Route::middleware('setlang')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('setlangt/{land}', function ($lang) {
        Session::put('lang', $lang);
        return redirect('/');
    });

    Route::view('about', 'about');
    Route::view('contect', 'contect');
});

