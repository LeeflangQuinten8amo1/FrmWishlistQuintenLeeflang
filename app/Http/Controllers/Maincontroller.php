<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function wishlist()
    {
        return view('wishlist');
    }
}
