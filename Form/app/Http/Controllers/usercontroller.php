<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
   function adduser(Request $req){
    echo "user name  is $req->username";
    echo "<br/>";
    echo "user email  is $req->useremail";
    echo "<br/>";
    echo "user city  is $req->useregucation";
    echo "<br/>";
    echo "user skills is  ";
    print_r($req->skill);
    echo "<br/>";
    echo "user gender  is $req->gender";
    echo "<br/>";
    echo "user city  is $req->city";
    echo "<br/>";
    echo "user fluent in english under 10  is $req->eng";
    echo "<br/>";
   }
}
