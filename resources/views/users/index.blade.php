@extends('layout')

@section('content')

@if (session('message'))
    <p class="success">{{ session('message') }}</p>
    @endif

@foreach($users as $user)
{{$user->id}} - {{$user->name}}- {{$user->email}} -{{$user->countryName}} - <a href="{{route('destroy',$user->id)}}">delete</a> -- <a href="{{route('show',$user->id)}}" onclick="return check()">show</a><br>
<form id="delform" action="{{route('destroy',$user->id)}}">
    @csrf
    @method('delete')
    <button type="button" onclick="del()">del</button>
</form>
@endforeach
<p><a href="/">home</a></p>
{{$users->links()}}

<script type="text/javascript">
    function del(){
        let a=confirm("are u sure you want to delete ?");
        if(a===true)
document.getElementById("delform").submit();
    }
    function check(){

        if(confirm("are you sure?"))
return true
else
return false

        
        
    }
</script>
@endsection