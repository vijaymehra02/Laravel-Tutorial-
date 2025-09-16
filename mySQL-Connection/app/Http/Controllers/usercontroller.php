<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function users(){
        return DB::select('select * from users') ;
    }
}
