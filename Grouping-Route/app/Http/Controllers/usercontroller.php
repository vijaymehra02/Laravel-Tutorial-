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
    function show(){
        return "group controller routing show function called";
    }
    function delete(){
        return "group controller routing delete function called";
    }
    function about($name){
        return "group controller routing about function called with value name = $name";
    }
    
}
