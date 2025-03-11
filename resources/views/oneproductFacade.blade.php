

@extends('layout')

@section('title','show')
@section('content')

@foreach($oneProduct as $product)
@if ($product->photo)
        <img style="width:200px"  src="{{asset('/images') .'/'. $product->photo}}" alt="">
        <!-- <img style="width:200px" src="/images/{{$product->photo}}" alt=""> -->
        @else
        <img src="https://picsum.photos/200/300" alt="">

        @endif
    <p>{{$product->ProductName}}</p>
    <p>{{$product->UnitPrice}}</p>
    <p>{{$product->CategoryName}}</p>
    <p>{{$product->CompanyName}}</p>
    <p>{{$product->description}}</p>
    <p style="color:red;font-weight:bold">{{$msg}}</p>
@endforeach
<a href="/facade">return to facade page</a>
@endsection