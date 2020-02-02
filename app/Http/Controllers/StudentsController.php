<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public $students = array('Preab', 'Sovath', 'Reach', 'Rith', 'Kanha');
    function showStudent()
    {
        return view('pages.student')->with('students', $this->students);
    }

    function searchStudent($name)
    {
        $result = $name . " Not Found";
        if (in_array($name, $this->students)) {
            $result = $name . " in the list";
        }
        return $result;
    }
}
