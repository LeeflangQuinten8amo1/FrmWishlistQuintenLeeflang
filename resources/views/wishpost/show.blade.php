@extends('layouts.app')
@section('content')
<h1>Details of post!</h1>
<div>
    <a href="/wishposts">Back</a>
</div>

<strong>Name</strong>
<p>{{ $wishpost->name }}</p>
<strong>Price</strong>
<p>{{ $wishpost->price }}</p>
<strong>Description</strong>
<p>{{ $wishpost->description }}</p>
<strong>ImageName</strong>
<p>{{ $wishpost->imagename }}</p>
<strong>link</strong>
<p>{{ $wishpost->link }}</p>
<div>
    <a href="/wishposts/{{ $wishpost->id }}/edit">Edit</a>
    <form action="/wishposts/{{ $wishpost->id }}" method="post">
        @method('DELETE')
        @csrf
        <button>DELETE</button>
    </form>
</div>
@endsection
