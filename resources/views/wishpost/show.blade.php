@extends('layouts.app')
@section('content')
<h1>Details Wens!</h1>
<div>
    <a href="/wishposts">Back</a>
</div>

<strong>Naam</strong>
<p>{{ $wishpost->name }}</p>
<a href="{{ $wishpost->link }}">
    <p><strong>€</strong> {{ $wishpost->price }}</p></a>
<strong>Beschrijving</strong>
<p>{{ $wishpost->description }}</p>
<strong>ImageNaam</strong>
<p>{{ $wishpost->imagename }}</p>
@auth
<div>
    <a href="/wishposts/{{ $wishpost->id }}/edit">Edit</a>
    <form action="/wishposts/{{ $wishpost->id }}" method="post">
        @method('DELETE')
        @csrf
        <button>DELETE</button>
    </form>
</div>
@endauth
@endsection
