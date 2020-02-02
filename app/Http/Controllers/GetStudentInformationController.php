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
}
