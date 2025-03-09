@extends('layout')

@section('content')
<form action="{{route('signin')}}" method="POST">
    @csrf
    name <input type="text" name="email" id="" style="border:2px solid green"><br>
    password <input type="text" name="password" id="" style="border:2px solid green"> <br>
    <button>login</button>
</form>

<form action="{{route('create')}}" method="POST">
    @csrf
    name <input type="text" name="email" id="" style="border:2px solid green"><br>
    password <input type="text" name="password" id="" style="border:2px solid green"> <br>
    <button>create</button>
</form>
<hr>

@endsection