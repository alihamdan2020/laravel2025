@foreach ($persons as $person)
<p><a href="{{route('personRoute.show',$person->personId)}}">{{$person->personName}} - {{$person->personAge}}</a> -- 
delete =>
<form action="{{ route('personRoute.destroy', $person->personId) }}" method="POST">
    @csrf
    @method('delete')
    <button>delete</button>
</form>
</p>
@endforeach