<form action="{{route('personRoute.store')}}" method="post">
    @csrf
    <input type="text" name="personName" id="">
    <p>
    @error('personName')
                    {{$message}}
                    @enderror
    </p>
    <input type="text" name="personAge" id="">
    <p>
    @error('personName')
                    {{$message}}
                    @enderror
    </p>
    <button type="submit">store</button>
</form>