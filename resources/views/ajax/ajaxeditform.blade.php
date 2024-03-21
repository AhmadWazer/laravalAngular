@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit user Data</div>
        <div class="card-body">
            <form action="{{route('ajax.update',$id)}}" method="POST" >
            @csrf
                <div id="form">
                    <button id="editButton" data-id="{{ $id }}" class="btn btn-danger">Edit</button><br>
                    <label for="ad">Name</label><br>
                    <input id="ad" placeholder="Wazir Ahmad">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        let id = $('#editButton').data('id');
        $.ajax({
            url: 'user-data'+id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data);

                const result = JSON.parse(JSON.stringify(data['ajaxdata']));
                let userForm = $('#form');
                // console.log(result);

                userForm.empty();
                let label = '';

                label += `<label for="name" class="form-label"> Name: </label><br>`;
                label += `<input type="text" class="form-control" name="name" id="name" value="${result.name}"><br>`;
                label += `<span class="text-danger"> @error('name'){{$message}}@enderror</span><br>`;
                label += `<label for="fname" class="form-label"> Father_Name: </label><br>`;
                label += `<input type="text" class="form-control" name="fname" id="fname" value="${result.father_name}"><br>`;
                label += `<span class="text-danger"> @error('fname'){{$message}}@enderror</span><br>`;
                label += `<label for="email" class="form-label"> Email: </label><br>`;
                label += `<input type="email" class="form-control" name="email" id="email" value="${result.email}"><br>`;
                label += `<span class="text-danger"> @error('email'){{$message}}@enderror</span><br>`;
                label += `<label for="phone" class="form-label"> Phone: </label><br>`;
                label += `<input type="number" class="form-control" name="phone" id="phone" value="${result.phone}"><br>`;
                label += `<span class="text-danger"> @error('phone'){{$message}}@enderror</span><br>`;

                label += `<label class="form-label"> Gender: </label><br>`;
                label += `<input type="radio" name="radio" class="form-check-input" id="m" value="m"${(('m') === result.gender) ? 'checked' : '' }>`;
                label += `<label for="m" class="form-check-label">Male</label><br>`;
                label += `<input type="radio" name="radio" class="form-check-input" id="f" value="f" ${(('f') === result.gender) ? 'checked' : '' }>`
                label += `<lable for="f" class="form-check-label">Female</lable><br>`;
                label += `<input type="radio" name="radio" class="form-check-input" id="o" value="o" ${(('o') === result.gender) ? 'checked' : '' }>`;
                label += `<lable for="o" class="form-check-label">Others</lable><br>`;
                label += `<span class="text-danger"> @error('radio'){{$message}}@enderror</span><br>`;

                label += `<label for="city" class="form-label"> City: </label><br>`;
                label += `<input type="text" class="form-control" name="city" id="city" value="${result.city}"><br>`;
                label += `<span class="text-danger"> @error('city'){{$message}}@enderror</span><br>`;
                label += `<label for="dob" class="form-label"> DoB: </label><br>`;
                label += `<input type="date" class="form-control" name="dob" id="dob" value="${result.DoB}"><br>`;
                label += `<span class="text-danger"> @error('dob'){{$message}}@enderror</span><br>`;
                label += `<button type="submit" class="btn btn-primary m-2"> Update </button>`;
                label += `<a href="/ajax/ajaxform" class="btn btn-success m-2">Back</a>`;
                // console.log(label);
                userForm.html(label);
            }
        });
    });
</script>
{{--save the update values in database--}}
<script>
    $(document).ready(function(){
        let id = $('#editButton').data('id');
        $('#form').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Retrieve the form data
            let formData = {
                name: $('#name').val(),
                fname: $('#fname').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                gender: $('input[name="gender"]:checked').val(),
                city: $('#city').val(),
                dob: $('#dob').val()
            };

            // Send the AJAX request
            $.ajax({
                url: 'updated' + id,
                type: 'POST',
                data: formData,
                success: function(response) {
                    alert('Data Updated Successfully');
                    console.log(response);
                },
                error: function(xhr) {
                    alert('Data Update Failed...!')
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
@endsection
