@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Form</div>
            <div class="card-body">
                <form action="{{route('form.update',$userdata->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$userdata->id}}" id="id">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" value="{{$userdata->name}}"
                               placeholder="Enter name" name="name">
                    </div>
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mt-3">
                        <label for="fname" class="form-label">F_Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter Father name"
                               value="{{$userdata->father_name}}" name="fname">
                    </div>
                    <span class="text-danger">
                        @error('fname')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email"
                               value="{{$userdata->email}}" name="email">
                    </div>
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone#:</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter phone#"
                               value="{{$userdata->phone}}" name="phone">
                    </div>
                    <span class="text-danger">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label>Gender:</label><br>
                        <input class="form-check-input" type="radio" value="male" {{(('male') == $userdata->gender) ? 'checked' : '' }}
                               id="m" name="radio">
                        <label class="form-check-label" for="m">Male</label>
                        <input class="form-check-input" type="radio" value="female" {{(('female') == $userdata->gender) ? 'checked' : '' }}
                        id="f" name="radio">
                        <label for="f">Female</label>
                        <input class="form-check-input" type="radio" name="radio" id="o"
                               value="others" {{(('others') == $userdata->gender) ? 'checked' : '' }}>
                        <label for="o">Others</label>
                    </div>
                    <span class="text-danger">
                        @error('radio')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label for="city" class="form-label">City:</label>
                        <input type="text" class="form-control" id="city" placeholder="Enter City Name"
                               value="{{$userdata->city}}" name="city">
                    </div>
                    <span class="text-danger">
                        @error('city')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="mb-3">
                        <label for="dob" class="form-label">DateOfBirth:</label>
                        <input type="date" class="form-control" id="dob" placeholder="Enter dob"
                               value="{{$userdata->DoB}}" name="dob">
                    </div>
                    <span class="text-danger">
                        @error('dob')
                        {{$message}}
                        @enderror
                    </span><br>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('form.view')}}" class="btn btn-success">Back</a>

                </form>
            </div>
        </div>
    </div>
@endsection

