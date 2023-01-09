<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function shop()
    {
        return view('shop');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
