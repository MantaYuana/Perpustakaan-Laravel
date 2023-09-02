<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return "hi! user with id= " . $id;
    }

    public function index()
    {
        return view('hello', ['name' => "james", 'age' => 25, 'citizenship' => 'English', 'siblings' => ['Robert', 'Natalia']]);
    }
}
