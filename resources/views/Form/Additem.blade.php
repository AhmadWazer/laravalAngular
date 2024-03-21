@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <form class="form-control card" method="post" action="{{route('item.store')}}">
        @csrf
            <div class="card-header"><h2>Add new Fruit</h2></div>
            <div class="card-body mb-3">
                <label for="item_name" class="form-label">Fruit-Name:</label><br>
                <input type="text" name="item_name" id="item_name" class="form-control" value="{{old('item_name')}}">
                <span class="text-danger">
                    @error('item_name')
                    {{$message}}
                    @enderror
                </span><br>
                <label for="item_price" class="form-label">Fruit-Price:</label><br>
                <input type="number" name="item_price" class="form-control" id="item_price" value="{{old('item_price')}}">
                <span class="text-danger">
                    @error('item_price')
                    {{$message}}
                    @enderror
                </span><br>
                <label for="item_image" class="form-label">Fruit-Image:</label><br>
                <input type="file" name="item_image" id="item_image" class="form-control" value="{{old('item_image')}}">
                <span class="text-danger">
                    @error('item_image')
                    {{$message}}
                    @enderror
                </span><br>
                <label for="item_date" class="form-label">Add-Date:</label><br>
                <input type="date" name="item_date" class="form-control" id="item_date" value="{{old('item_date')}}">
                <span class="text-danger">
                    @error('item_date')
                    {{$message}}
                    @enderror
                </span><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>

@endsection
