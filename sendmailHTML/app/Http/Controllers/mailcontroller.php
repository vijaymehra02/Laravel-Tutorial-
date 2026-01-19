<?php

namespace App\Http\Controllers;

use App\Mail\welcomemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{
    function sendmail(){
        $to = "vijaybahadursinghmehra143@gmail.com";
        $msg = "dami mail";
        $subject = "code by vijay laravel";

        Mail::to($to)->send(new welcomemail($msg , $subject));  
    }
}
