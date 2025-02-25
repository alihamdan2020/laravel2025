@extends('layout')
@section('title','index page')
@section('content')
<nav>
    <a href="/facade">display data using indexFacade function </a>
    <a href="/modal">display data using indexModal function</a>
</nav>
<nav>
    <a href="{{route('insert_data')}}">insert data</a>
</nav>
@endsection