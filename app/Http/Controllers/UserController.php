<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        return sprintf('Welcome to admin page %s, email %s, password %s',
            $name, $email, $password);
    }

    public function getUserDetail($id){
        return 'Hello path ' . $id;
    }

    //
    public function signup(){
        return view('user.register');
    }

    public function processSignup(Request $request){
        $firstName = $request->get('firstname'); // lấy dữ liệu từ trường firstname ở trong form và gán ra biến $firstname
        $lastName = $request->get('lastname');
        $country = $request->get('country');
        return view('user.register-success',
            [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'country' => $country,
            ]);
    }
}
