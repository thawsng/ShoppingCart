<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showIndex(){
        return view('admin.index');
    }

    public function showList(){
        return view('admin.list');
    }

    public function showForm(){
        return view('admin.form');
    }
}
