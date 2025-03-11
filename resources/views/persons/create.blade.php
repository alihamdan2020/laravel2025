<form action="{{route('personRoute.store')}}" method="post">
    @csrf
    <input type="text" name="personName" id="">
    <p>
    @error('personName')
                    {{$message}}
                    @enderror
    </p>
    <input type="number" name="personAge" id="">
    <p>
    @error('personAge')
                    {{$message}}
                    @enderror
    </p>
    <input type="password" name="password" id="">
    @error('password')
                    {{$message}}
                    @enderror
    <input type="password" name="password_confirmation" id="">
    @error('password_confirmaton')
                    {{$message}}
                    @enderror
    <button type="submit">store</button>
</form>