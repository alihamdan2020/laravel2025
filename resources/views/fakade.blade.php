@extends('layout')
@section('title','index page')

@section('content')
@if(session()->has('msg'))
<H1>{{session('msg')}}</H1>
@endif
<div class="link"><a href="{{url('/')}}">return home page</a></div>
<div class="cards">
    @foreach ($allProducts as $product)
    <div class="card">
       
        <p><span>product name</span>{{$product->ProductName}}</p>
        <p><span>product price</span>{{$product->UnitPrice}}</p>
        <p><span>product qty</span>{{$product->QuantityPerUnit}}</p>
        <p><span>category</span>{{$product->CategoryName}}</p>
        <p><span>supplier</span>{{$product->CompanyName}}</p>
        <p><a href="{{route('showProduct',$product->ProductID)}}">show details</a></p>
    </div>
    @endforeach
</div>
@endsection