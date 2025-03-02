

@extends('layout')

@section('title','show')
@section('content')

@foreach($oneProduct as $product)
    <p>{{$product->ProductName}}</p>
    <p>{{$product->UnitPrice}}</p>
    <p>{{$product->CategoryName}}</p>
    <p>{{$product->CompanyName}}</p>
    <p>{{$product->description}}</p>
@endforeach
<a href="/facade">return to facade page</a>
@endsection