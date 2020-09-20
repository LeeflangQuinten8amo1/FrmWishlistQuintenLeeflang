@extends('layouts.app')
@section('title', 'Wishlist')
@section('content')
<h1>HALLO DIT IS CONTENT</h1>
@foreach($list as $listitem)
    <tr>
        <td> {{$listitem->description}}<br><br></td>
    </tr>
@endforeach
@endsection
