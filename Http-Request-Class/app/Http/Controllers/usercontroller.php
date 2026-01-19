<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function seccess(Request $request){
        echo"<h1>all this details are printed by the halp of  http request class</h1>";
        echo"<br/>";
        
        echo"request mathois is ->". $request->method();
        echo"<br/>";
        echo"request path is ->". $request->path();
        echo"<br/>";
        echo"request url is ->". $request->url();
        echo"<br/>";
        echo"name is ->". $request->input('name');
        echo"<br/>";
        echo"name is ->". $request->name;
        echo"<br/>";
        echo"IP is ->". $request->ip();
        echo"<br/>";
         
    }
}
