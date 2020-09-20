@extends('layouts.app')
@section('content')
    <h1>Wishposts!</h1>
    @forelse($wishposts as $wishpost)
        <a href="/wishposts/{{ $wishpost->id }}"><p><strong>{{$wishpost->name}}</strong></p></a>
        <strong>Price</strong>
        <p>{{ $wishpost->price }}</p>
        <strong>Description</strong>
        <p>{{ $wishpost->description }}</p>
        <strong>ImageName</strong>
        <p>{{ $wishpost->imagename }}</p>
        <strong>link</strong>
        <p>{{ $wishpost->link }}</p>
        <div>
    @empty
        <p>No posts</p>
    @endforelse
@endsection
