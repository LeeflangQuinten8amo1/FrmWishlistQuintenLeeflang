<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WishPostController extends Controller
{
    public function index()
    {
        $wishposts = \App\WishPost::all();

        return view('wishpost.index', compact('wishposts'));
    }
    public function create()
    {
        return view('wishpost.create');
    }
    public function store()
    {
        \App\WishPost::create($this->validatedData());
        return redirect('/wishposts');
    }
    public function show(\App\WishPost $wishpost)
    {
//        $wishpost = \App\WishPost::findOrFail($wishpostId);
        return view('wishpost.show', compact('wishpost'));

    }
    public function edit(\App\WishPost $wishpost)
    {
        return view('wishpost.edit', compact('wishpost'));
    }
    public function update(\App\WishPost $wishpost)
    {
        $wishpost->update($this->validatedData());
        return redirect('/wishposts');
    }
    public function destroy(\App\WishPost $wishpost)
    {
        $wishpost->delete();
        return redirect('/wishposts');
    }
    public function listit()
    {
        $wishposts = \App\WishPost::all();

        return view('wishpost.list', compact('wishposts'));
    }
    protected function validatedData()
    {
        return request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'imagename' => 'required',
            'link' => 'required',
        ]);
    }

}
