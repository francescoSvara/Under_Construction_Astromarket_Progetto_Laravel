<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function homepage() {
        return view('homepage');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}