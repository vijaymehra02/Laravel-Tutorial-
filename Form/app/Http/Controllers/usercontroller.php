<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
   function adduser(Request $req){
    echo "user name  is $req->username";
    echo "<br/>";
    echo "user email  is $req->useruseremail";
    echo "<br/>";
    echo "user city  is $req->usercity";
   }
}
