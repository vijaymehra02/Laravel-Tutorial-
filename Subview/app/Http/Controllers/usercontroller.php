<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function userwelcome(){
        return view('welcome');
    }
    function userhome(){
        return view('home');
    }
    function userabout(){
        return view('about');
    }
}
