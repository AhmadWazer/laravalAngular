@extends('layouts.app')

@section('content')
    <div class="container">
        {{--Success Message when data submit--}}
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        {{--Success Message when data submit--}}
        <div class="card">
            <div class="card-header">Form</div>
            <div class="card-body">
                <form action="{{route('form.save')}}" method="post">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
                    </div>
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>

                    <div class="mt-3">
                        <label for="fname" class="form-label">F_Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter Father name" name="fname" value="{{old('fname')}}">
                    </div>
                    <span class="text-danger">
                        @error('fname')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{old('email')}}" >
                    </div>
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone#:</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter phone#" name="phone" value="{{old('phone')}}" >
                    </div>
                    <span class="text-danger">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label>Gender:</label><br>
                        <input type="radio" value="m" id="male" name="radio"{{(('m') == old('radio')) ? 'checked' : '' }}>
                        <label for="m">Male</label>
                        <input type="radio" value="f" id="female" name="radio"{{(('f') == old('radio')) ? 'checked' : '' }}>
                        <label for="f">Female</label>
                        <input type="radio" name="radio" id="others" value="o"{{(('o') == old('radio')) ? 'checked' : '' }}>
                        <label for="o">Others</label>
                    </div>
                    <span class="text-danger">
                        @error('radio')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label for="city" class="form-label">City:</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter City Name" name="city" value="{{old('city')}}" >
                    </div>
                    <span class="text-danger">
                        @error('city')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label for="dob" class="form-label">DateOfBirth:</label>
                        <input type="date" class="form-control" id="dob" placeholder="Enter dob" name="dob" value="{{old('dob')}}">
                    </div>
                    <span class="text-danger">
                        @error('dob')
                        {{$message}}
                        @enderror
                    </span><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('form.view')}}" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
