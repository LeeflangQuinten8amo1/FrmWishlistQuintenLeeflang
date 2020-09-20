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
        $list = \App\Wish::all();
        return view('wishlist', compact('list'));
    }
    public function managements()
    {
        return view('managing');
    }
}
