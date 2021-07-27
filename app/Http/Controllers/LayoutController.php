<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function page1(){
        return view('page1');
    }

    public function page2(){
        return view('page2');
    }

    public function page3(){
        return view('page3');
    }
}
