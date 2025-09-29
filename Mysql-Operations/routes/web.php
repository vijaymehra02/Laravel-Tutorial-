<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('add','add-student');

Route::post('add',[StudentController::class,'add']);

Route::get('list',[StudentController::class,'studentdata']);

Route::get('delete/{id}',[StudentController::class,'delete']);

Route::get('edit/{id}',[StudentController::class,'edit']);