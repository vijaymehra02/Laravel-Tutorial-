<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function userdetails(){
        return view('user-details');
    }
    function deshboad(){
        return view('deshboad');
    }
    function logoout(){
        return view('welcome');
    }
}
