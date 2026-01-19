<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//this halpes for check view exists
use Illuminate\Support\Facades\View; 

class UserCntroller extends Controller
{
    function userhome(){
        return view('home');
    }
    function userabout(){
        return view('about');
    }
    function auther(){
        if(View::exists('Auth.auther')){
            return view('Auth.auther');
        }else{
            echo"No view found";
        };
    }
}
