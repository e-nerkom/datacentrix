<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ADMIN');
    }

    public function index()
    {
        $title = 'Welcome';
        return view('admin.welcome', compact('title'));
    }
}
