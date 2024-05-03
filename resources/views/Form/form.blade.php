@extends('layouts.app')

@section('content')
    <style>
        /* Custom pagination link color */
        .pagination a {
            color: #b9fab9; /* Change this to the desired color value  */
            background-color: #0f5132;
            border-color: #0f5132;
        }
        .pagination .page-item.active .page-link {
            background-color: #ffffff; /* Change this to the desired color value of the active paginate value */
            border-color: #ffffff; /* Change this to the desired color value of the active paginate border*/
            color: #0f5132; /* Change this to the desired color value of inactive paginate*/
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <div class="container mt-3">
       {{--Display Message When Table Update or Delete--}}
        @if(Session::has('delete'))
            <div class="alert alert-danger">
                {{ Session::get('delete') }}
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        {{--Display Message When Table Update or Delete--}}
        <div class="d-flex justify-content-between">
        <h2>Table</h2>
{{--///////////////////////////////--}}

{{--//////////////////////////////--}}
        <a href="{{url('/form/create')}}" style="text-decoration: none" class="text-success btn-sm">
            <i class="bi bi-pencil-fill"></i>Create</a>
        </div>
        <table class="table table-bordered text-center ">
            <thead>
            <tr>
                <th>Name</th>
{{--                <th>father_Name</th>--}}
                <th>Email</th>
                <th>Phone#</th>
{{--                <th>Gender</th>--}}
{{--                <th>DateOfBirth</th>--}}
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($value as $data)
            <tr>
                <td>{{$data->name}}</td>
{{--                <td>{{$data->father_name}}</td>--}}
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
{{--                <td>{{$data->gender}}</td>--}}
{{--                <td>{{$data->DoB}}</td>--}}
                <td>
                    <div class="d-flex justify-content-center">
                        <div class="m-2">
                            <button style="border: none">
                                <a href="{{url('form/pageview'.$data->id)}}"><i class="bi bi-card-text"></i></a>
                            </button>
                        </div>

                        <div class="m-2">
                           <button style="border: none">
                               <a href="{{url('/form/edit'.$data->id)}}">
                                   <i class="bi bi-pencil-square text-success"></i></a>
                           </button>
                        </div>
                        <div class="m-2">
                            <form action="{{route('form.delete',$data->id)}}" method="post">
                                @csrf
                                <button type="submit" onclick="return confirm('Sure Are You Want To Delete?')" style="border: none">
                                    <i class="bi bi-trash text-danger"></i></button>
                            </form>
                           </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{--for show pagination--}}
    <div class="container d-flex justify-content-center">
        {{ $value->links() }}
    </div>
        {{--for show pagination--}}
    </div>
{{--Script for delete button allert--}}
<script>
    let deleteLinks = document.querySelectorAll('.delete');

    for (let i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function(event) {
            event.preventDefault();

            let choice = confirm(this.getAttribute('data-confirm'));

            if (choice) {
                window.location.href = this.getAttribute('href');
            }
        });
    }
</script>
{{--    Script for delete button allert--}}

@endsection
