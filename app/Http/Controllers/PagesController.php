<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function admissions(){
        return view('pages.admissions');
    }
    public function sports(){
        return view('pages.sports');
    }
    public function studentlife(){
        return view('pages.studentlife');
    }
    public function academics(){
        return view('pages.academics');
    }
    public function contact(){
        return view('pages.contact');
    }
}
