<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    function showSubject(){
        $subjects = array(
            ['name' => 'Java','score' => 100],
            ['name' => 'JavaScript','score' => 90],
            ['name' => 'PHP','score' => 70],
            ['name' => 'Bootstrap','score' => 100],
            ['name' => 'laravel','score' => 100],
        );
        return view('pages.subject')->with('subjects',$subjects);
    }
}
