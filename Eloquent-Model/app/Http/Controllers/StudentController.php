<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function student(){
        $fun =new \App\Models\student;
        echo $fun->testfun();
        $students = \App\Models\student::all();
        return view('students',['data'=>$students]);
    }
}
