<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser() {
        return "<p>this is return by controller </p><h1>vijay</h1>";
    }

    function getrealUser($name) {
        // return "<h1>Hello ".$name."</h1>";
        return view('user',['name'=>$name]);
    }

    function viewUser() {
        return view('viewuser');
    }
   
}