<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginView(){
        return view('login');
    }

    public function login(Request $request) {
        return redirect()->route('home', ['name' => $request['name']]);
    }
}
