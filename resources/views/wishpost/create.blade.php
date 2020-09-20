@extends('layouts.app')
@auth
@section('content')
<h1>add new post</h1>

<form action="/wishposts" method="post">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" autocomplete="off" value="{{ old('name') }}"><br>
        @error('name')<p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="price">Price: </label>
        <input type="number" step="0.01" name="price" autocomplete="off" value="{{ old('price') }}"><br>
        @error('price')<p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="description">Description: </label>
        <input type="text" name="description" autocomplete="off" value="{{ old('description') }}"><br>
        @error('description')<p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="imagename">ImageName:</label>
        <input type="text" name="imagename" autocomplete="off" value="{{ old('imagename') }}"><br>
        @error('imagename')<p style="color: red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="link">Link: </label>
        <input type="text" name="link" autocomplete="off" value="{{ old('link') }}"><br>
        @error('link')<p style="color: red">{{ $message }}</p> @enderror
    </div>


    @csrf

    <button>Add new Wishpost</button>
</form>
@endsection
@endauth
@guest
    <h1>Insufficient access</h1>
@endguest
