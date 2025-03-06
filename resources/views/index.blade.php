@extends('layout')
@section('title','index page')
@section('content')
<nav>
    <a href="/facade">display data using indexFacade function </a>
    <a href="/modal">display data using indexModal function</a>
    <a href="{{route('show_categories')}}">show categories</a>
</nav>
<div class="seperator"></div>
<nav>
    <a href="{{route('insert_data')}}">insert data</a>
</nav>
<div class="seperator"></div>
<nav>
    <a href="/users">all users</a>
</nav>
<div class="seperator"></div>
<nav>
    <a href="{{route('personRoute.index')}}">display all persons</a>
    <a href="{{route('personRoute.create')}}">add new person</a>
</nav>

@endsection