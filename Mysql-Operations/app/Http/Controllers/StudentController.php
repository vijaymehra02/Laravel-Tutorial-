<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentt;

class StudentController extends Controller
{
    function add(Request $request){
        $student = new Studentt;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phoneno');
        $student->save();
        if($student){
            return "student added successfully";
        }else{
            return "NO student added" ;
            
        }
   }

   function studentdata(){
       $allsata = studentt::all();
       return view('student-list',['students'=>$allsata]);
   }

   function delete($id){
          $isstudent = studentt::destroy($id);
          if($isstudent){
            return redirect('list');
          }else{
            return 'no data ';
          }
   }

   function edit($id){
    $student = studentt::find($id);
    return view("edit-student",['student'=>$student]);
   }
}
