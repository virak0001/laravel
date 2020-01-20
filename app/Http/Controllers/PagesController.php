<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //view
    public function view()
    {
        return view('welcome');
    }
    //action
    public function action()
    {
        $title = "Action";
        return view('pages.action', compact('title'));
    }
    //about
    public function about()
    {
        $title = "About";
        return view('pages.about', ['title' => $title]);
    }
    //join
    public function join()
    {
        $title = "Join";
        return view('pages.join')->with('title', $title);
    }
    //news
    public function news()
    {
        $title = "News";
        return view('pages.news')->with('title', $title);
    }
    //contact
    public function contact()
    {
        $title = "Contact";
        return view('pages.contact')->with('title', $title);
    }
    //listCustomer
    public function listCustomer()
    {
        $customer = array(

            '0' => array('id' => 1, 'name' => 'Chandaraty', 'email' => 'chandaraty@example.org'),

            '1' => array('id' => 2, 'name' => 'Maly', 'email' => 'maly@example.org'),

            '2' => array('id' => 3, 'name' => 'Samphas', 'email' => 'samphas@example.org'),

            '3' => array('id' => 4, 'name' => 'Donat', 'email' => 'donat@example.org')

        );
        return view('pages.customer')->with('customer', $customer);
    }
}
