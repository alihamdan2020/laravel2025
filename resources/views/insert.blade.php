@extends('layout')
@section('title','insert a new record')

@section('content')
<div class="forms">
    <div>
    @if(session()->has('msg'))
    <p>{{session('msg')}}</p>
    @endif
    <a href="/">return to home page</a>

    <form action="{{route('storeFacade')}}" method="POST">
       @csrf
        <div class="controls">
            <label for="productName">product name</label>
            <input type="text" name="prodname" id="productName" autocomplete="off">
            <p>
            @error('prodname')
            {{$message}}
            @enderror
            </p>
        </div>
        <div class="controls">
            <label for="productPrice">product price</label>
            <input type="text" name="prodprice" id="productName" autocomplet="off">
            <p>
            @error('prodprice')
            {{$message}}
            @enderror
            </p>
        </div>
        <div class="controls">
            <label for="suppliers">supplier</label>
            <select name="supid" id="">
                @foreach($supp as $sup)
                <option value="{{$sup->SupplierID}}">{{$sup->CompanyName}}</option>
                @endforeach
            </select>
        </div>

        <div class="controls">
            <label for="categories">category</label>
            <select name="catid" id="">
                @foreach($cats as $cat)
                <option value="{{$cat->CategoryID}}">{{$cat->CategoryName}}</option>
                @endforeach
            </select>
        </div>

        <div class="controls">
            <button>submit</button>
        </div>
    </form>
</div>
<div>
    @if(session()->has('msg1'))
    <p>{{session('msg1')}}</p>
    @endif
    <a href="/">return to home page</a>

    <form action="{{route('storeModale')}}" method="POST">
       @csrf
        <div class="controls">
            <label for="productName">product name</label>
            <input type="text" name="ProductName" id="productName" autocomplete="off" value={{old('ProductName')}}>
            <p>
            @error('ProductName')
            {{$message}}
            @enderror
            </p>
        </div>
        <div class="controls">
            <label for="productPrice">product price</label>
            <input type="text" name="UnitPrice" id="productName" autocomplete="off" value={{old('UnitPrice')}}>
            <p>
            @error('UnitPrice')
            {{$message}}
            @enderror
            </p>
        </div>
        <div class="controls">
            <label for="suppliers">supplier</label>
            <select name="SupplierID" id="">
                @foreach($supp as $sup)
                <option value="{{$sup->SupplierID}}">{{$sup->CompanyName}}</option>
                @endforeach
            </select>
        </div>

        <div class="controls">
            <label for="categories">category</label>
            <select name="CategoryID" id="">
                @foreach($cats as $cat)
                <option value="{{$cat->CategoryID}}">{{$cat->CategoryName}}</option>
                @endforeach
            </select>
        </div>

        <div class="controls">
            <button>submit</button>
        </div>
    </form>
</div>
</div>
    @endsection