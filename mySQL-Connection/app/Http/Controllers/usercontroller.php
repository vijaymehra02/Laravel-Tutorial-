<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function users(){
 
        //fetch data by using query builder
        // $users = DB::table('users')->get();

        $users = DB::select('select * from users');
        return view('users',['users'=>$users]) ;
    }
}
