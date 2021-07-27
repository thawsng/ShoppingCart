<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(Request $request){
        return view('welcome', [
                'numbers'=> [1, 3, 5, 7, 9, 11, 13, 15],
                'name' => 'Xuan Hung'
            ]
        );
    }
}
