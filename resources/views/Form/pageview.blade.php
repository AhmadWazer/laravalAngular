@extends('layouts.app')

@section('content')
<div class="container col-6">
    <div class="card">
        <div class="card-header"><h1>{{$pageview->name}}</h1></div>
        <div class="card-body">
            <h2><b>Email:-</b> <i class="text-dark">{{$pageview->email}}</i></h2>
            <h2><b>Phone#:-</b> <i class="text-dark">{{$pageview->phone}}</i></h2>
            <h2><b>DOB:-</b> <i class="text-dark">{{$pageview->DoB}}</i></h2>
            <h2><b>FatherName:-</b> <i class="text-dark">{{$pageview->father_name}}</i></h2>
            <h2><b>Gender:-</b> <i class="text-dark">{{$pageview->gender}}</i></h2>
            <h2><b>City:-</b> <i class="text-dark">{{$pageview->city}}</i></h2>
            <h2><b>Updated At:-</b> <i class="text-dark">{{$pageview->updated_at}}</i></h2>
        </div>
    </div>
    <div class="mt-2">
        <a class="btn btn-success" href="/form/view">Back</a>
    </div>
</div>
@endsection
