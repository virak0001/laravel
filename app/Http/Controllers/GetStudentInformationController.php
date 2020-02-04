<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class GetStudentInformationController extends Controller
{
    function getAllStudent(){
        $student = Student::all();
        return view('pages.students')->with('student',$student);
    }


    function form(){
        return view('pages.formStudent')->with('formStudent');
    }

    function saveStudent(Request $request ){
        $student = new Student;
        $student -> FirstName = $request ->get('fn');
        $student -> LastName = $request ->get('ln');
        $student -> Age = $request ->get('n');
        $student -> save();
        return redirect('students');
    }

    public function formUpdate($id){
        $students = Student::find($id);
        return view('pages.formUpdate')->with('s',$students);
    }

    public function update($id, Request $request){
        $student = Student::find($id);
        $student -> FirstName = $request -> fn;
        $student -> LastName = $request -> ln;
        $student -> Age = $request -> n;
        $student -> save();
        return redirect('students');
    }
}
