@extends('layout')

@section('content')
@foreach($users as $user)
{{$user->id}} - {{$user->name}}- {{$user->email}} -{{$user->countryName}} - <a href="{{route('destroy',$user->id)}}">delete</a> -- <a href="{{route('show',$user->id)}}" onclick="return check()">show</a><br>
@endforeach
<p><a href="/">home</a></p>
{{$users->links()}}

<script type="text/javascript">
    function check(){

        if(confirm("are you sure?"))
return true
else
return false

        
        
    }
</script>
@endsection