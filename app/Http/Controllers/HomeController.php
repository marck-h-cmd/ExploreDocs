<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class HomeController extends Controller
{
    public function index(){
        return view('pages.user.index');
    }

     public function papers(){
        return view('pages.user.papers.index');
    }

    public function about(){
           return view('pages.user.about.about');
    }
}
