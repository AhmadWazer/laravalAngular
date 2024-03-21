@extends('layouts.app')

@section('content')
    <form>
        <div class="container col-6" id="card">
            <div class="card">
                <a id="Button" data-id="{{$id}}"></a>
<h2>gfhfdhfh</h2>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            let id = $('#Button').data('id');
            $.ajax({
                url: 'user-dataview' + id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);

                const view = JSON.stringify(data['customerview']);
                let value = $('#card');
                // console.log(view);

                value.empty();
                let table = '';

                table += `<div class="card-header"> Name: +${view.customer_name} </div><br>`;
                // console.log(label);
                value.html(table);
                }
            });
        });
    </script>
@endsection
