<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user', compact('users'));
    }

    public function exchangeRate()
    {
        $response = Http::get('https://open.er-api.com/v6/latest/USD')->json();

        return view('ajax.index', compact('response'));
    }

    public function asyncJs()
    {
        return view('ajax.asyncjs');
    }
}
