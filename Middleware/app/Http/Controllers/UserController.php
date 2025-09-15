<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class usercontroller extends Controller
{
    function home(){
       return View('home');
    }
}
