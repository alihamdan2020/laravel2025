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
    name <input type="text" name="email" id="" style="border:2px solid green">
    @error('email')
<span>{{$message}}</span>
@enderror<br>
    password <input type="text" name="password" id="" style="border:2px solid green"> @error('password')
<span>{{$message}}</span>
@enderror<br><br>
    confirm password <input type="text" name="password_confirmation" id="" style="border:2px solid green"> <br>
@error('password_confirmation')
<span>{{$message}}</span>
@enderror
    <button>create</button>
</form>
<hr>

@endsection