<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }
    public function experience(){
        return view('frontend.experience');
    }
    public function projects(){
        return view('frontend.projects');
    }
}
