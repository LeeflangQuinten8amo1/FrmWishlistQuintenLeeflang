@extends('layouts.app')
@auth
@section('content')
<h1>Wishposts</h1>
<a href="/wishposts/create">Create new post</a>
@forelse($wishposts as $wishpost)
<a href="/wishposts/{{ $wishpost->id }}"><p><strong>{{$wishpost->name}}</strong></p></a>
@empty
<p>No posts</p>
@endforelse
@endsection
@endauth
@guest
    <h1>Insufficient access</h1>
@endguest
