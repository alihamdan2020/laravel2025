@extends('layout')

@section('content')
<p>this is info about one user</p>

<p>{{$user->name}}</p>
<p>{{$user->email}}</p>
<p>{{$user->password}}</p>
<p>{{$user->countryName}}</p>


<a href="/users">return home 2025</a>
@endsection