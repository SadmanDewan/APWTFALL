<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller

{
    public function index()
    {
        return view('pages.home');
    }

    public function product()
    {
        $p=array("Calculator","Pen","Pendrive","Watch","Mobile");
        return view("pages.products")->with("products", $p);
    }

    public function teams()
    {
        $p1=array("Sadman","Rahim","Anik","Tamim","Sakib");
        return view("pages.teams")->with("teams", $p1);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}

