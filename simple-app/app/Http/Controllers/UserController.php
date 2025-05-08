<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // $firstUser = User::where('name', 'Cici Widiastuti')->get();

        return view('user', compact('users'));
    }
}
