<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function view(){
        return view('welcome');
    }

    public function action(){
        $title = "Action";
        return view('pages.action',compact('title'));
    }

    public function about(){
        $title = "About";
        return view('pages.about',['title'=>$title]);
    }

    public function join(){
        $title = "Join";
        return view('pages.join')->with('title',$title);
    }

    public function news(){
        $title = "News";
        return view('pages.news')->with('title',$title);
    }

    public function contact(){
        $title = "Contact";
        return view('pages.contact') -> with('title',$title);
    }
    public function showCustomer(){
        $customer = array('Chandaraty','Naly','Samphas','Donat');
        return view('pages.customer') -> with('customer',$customer);
    }
}