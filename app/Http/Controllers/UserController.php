<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user|admin');
    }
    public function index()
    {
        return view('user.userindex');
    }
}
