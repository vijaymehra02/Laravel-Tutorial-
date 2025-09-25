<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
   function upload(Request $request){

    // file name also define
    // $path = $request->file('file')->storeAs('public','dummy1.png'); 

    // auto generate file name rendumly
    $path = $request->file('file')->store('public');
    $filenamearray = explode("/",$path);
    $fileName = $filenamearray[1];
    return view('welcome',['path'=>$fileName]);
   }

   function viewImage(Request $request ){

     $path = $request->query('path');
     return view('view-image',['path'=>$path]);  

   }
}
