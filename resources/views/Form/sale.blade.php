@extends('layouts.app')

@section('content')
<div class="container col-12">
    @if(Session::has('success'))
        <div class="alert alert-success">
        {{session::get('success')}}
        </div>
    @endif
    <div class="ms-5 row col-6">
    @foreach($data as $value)
    <form action="{{route('sale.Store')}}" method="post">
        @csrf
        <input type="hidden" name="customer_id" value="{{$id}}">
        <input type="hidden" class="form-control" name="item_id" value="{{$value->item_id}}">
        <div class="card m-4" >
            <img src="{{ url('images/'.$value->photo) }}" class="card-img-top" alt="NO Image">
            <div class="card-body">
                <h5 class="card-title">{{$value->item_name}}</h5>
                <p class="card-text">This Fruit Comes Our Store At {{$value->added_date}}.</p>
                <button type="submit" class="btn btn-primary">Sale</button>
            </div>
        </div>
    </form>
        @endforeach
        <a class="btn btn-success" href="/ajax/ajaxform">Back</a>
    </div>
</div>
@endsection
