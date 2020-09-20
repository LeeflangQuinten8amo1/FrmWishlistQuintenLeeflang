@extends('layouts.app')
@auth
@section('content')

<h1>Edit Posts</h1>

<form action="/wishposts/{{ $wishpost->id }}" method="post">

    @method('PATCH')
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" autocomplete="off" value="{{ $wishpost->name }}"><br>
        @error('name')<p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="price">Price: </label>
        <input type="number" step="0.01" name="price" autocomplete="off" value="{{ $wishpost->price }}"><br>
        @error('price')<p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="description">Description: </label>
        <input type="text" name="description" autocomplete="off" value="{{ $wishpost->description }}"><br>
        @error('description')<p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="imagename">ImageName:</label>
        <input type="text" name="imagename" autocomplete="off" value="{{ $wishpost->imagename }}"><br>
        @error('imagename')<p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="link">Link: </label>
        <input type="text" name="link" autocomplete="off" value="{{ $wishpost->link }}"><br>
        @error('link')<p style="color: red">{{ $message }}</p> @enderror
    </div>


    @csrf

    <button>Save Wishpost</button>
</form>
@endsection
@endauth
@guest
    <h1>Insufficient access</h1>
@endguest
