<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function userlogin(Request $request){
        $request->session()->put('user',$request->input('username'));
        return redirect('profile');
    }
    function userlogout(Request $request){
        $request->session()->pull('user');
        return redirect('profile');
    }
}
