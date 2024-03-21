{{--<!doctype html>--}}
{{--<html lang="">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <!-- CSRF Token -->--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--<title>{{ config('app.name', 'Laravel') }}</title>--}}
{{--<!-- Fonts -->--}}
{{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">@section('content')@endsection--}}

{{--    <link rel="dns-prefetch" href="//fonts.bunny.net">--}}
{{--    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src=--}}
{{--            "https://code.jquery.com/jquery-3.5.1.js">--}}
{{--</script>--}}
{{--        <!-- Scripts -->--}}
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
{{--    </head>--}}
{{--<body>--}}
@extends('layouts.app')
@section('content')

    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>

<div class="container">
    <div class="d-flex justify-content-between">
        <h2 class="text-danger">Table</h2>
    </div>
<table id='table' class="table table-hover table-bordered mt-3">
    <!-- HEADING FORMATION -->
<thead class="text-center">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>gender</th>
    <th>Action</th>
    <th>Sales</th>
</tr>
</thead>
<tbody id="tableRecord" class="text-center">
<tr>
    <td>No id Found!</td>
    <td>Name</td>
    <td>Email</td>
    <td>gender</td>
    <td>Action</td>
    <td>Sales</td>
</tr>
</tbody>
</table>

    <a class="btn btn-success" href="/ajax/ajaxform">Back</a>
</div>
<script>
    $(document).ready(function(){
        $.ajax({
            url: 'user-list',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data);

              const result = JSON.parse(JSON.stringify(data['customer']));
                let tableRecord = $('#tableRecord');
                tableRecord.empty();
                let rows = '';
                for (let i = 0; i < result.length; i++) {
                    rows += `<tr><td>${result[i].customer_id}</td>`;
                    rows += `<td>${result[i].customer_name}</td>`;
                    rows += `<td>${result[i].customer_email}</td>`;
                    rows += `<td>${result[i].gender}</td>`;
                    rows += `<td  class="d-flex justify-content-center"><a href="ajaxeditform${result[i].customer_id}"><i class="bi bi-pencil-square text-success m-2"></i></a>`;
                    rows += `<a href="delete${result[i].customer_id}"><i class="bi bi-trash text-danger m-2"></i></a></td>`;
                    rows += `<td><a href="/form/sale${result[i].customer_id}"><i class="bi bi-card-text m-2"></i></a>`;
                    rows += `<a href="/form/showSales${result[i].customer_id}" style="color: orange; text-decoration: none">PP</a></td></tr>`;
                }
                // console.log(rows);
                tableRecord.html(rows);
            }
        });
    });
</script>
@endsection
{{--</body>--}}
{{--</html>--}}
