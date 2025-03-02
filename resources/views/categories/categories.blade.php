@extends('layout')

@section('content')
@foreach($categories as $category)
<div class="contents" style="display: flex;gap:10px">
<div style="border:1px solid green;flex-basis:600px">{{$category->CategoryName}}</div>
<div style="border:1px solid green">{{$category->Description}}</div>
</div>
@endforeach
@endsection