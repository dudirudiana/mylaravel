<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dasboard(){
        return view('dasboard');
    }
    public function about(){
        return view('about');
    }
}
