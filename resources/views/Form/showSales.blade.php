@extends('layouts.app')

@section('content')
{{--    <div class="container mt-3">--}}
{{--        <div class="">--}}
{{--            <div class="">--}}
{{--                <table class="table">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>Customer_Id</th>--}}
{{--                        <th>Customer_Name</th>--}}
{{--                        <th>Customer_F_Name</th>--}}
{{--                        <th>Customer_Email</th>--}}
{{--                        <th>Customer_Phone_number</th>--}}
{{--                        <th>Customer_NIC_Number</th>--}}
{{--                        <th>NIC_expire_date</th>--}}
{{--                        <th>Customer_Picture</th>--}}
{{--                        <th>Customer_DOB</th>--}}
{{--                        <th>Customer_Address</th>--}}
{{--                        <th>Customer_Occupation</th>--}}
{{--                        <th>Created_at</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td>1</td>--}}
{{--                        <td>Wazir Ahmad</td>--}}
{{--                        <td>Rehmat Hussain</td>--}}
{{--                        <td>wazir@hbl.com</td>--}}
{{--                        <td>03401990552</td>--}}
{{--                        <td>4523225913551</td>--}}
{{--                        <td>2024-5-25</td>--}}
{{--                        <td>Image</td>--}}
{{--                        <td>2000-5-24</td>--}}
{{--                        <td>Rawalpindi_Islamabad</td>--}}
{{--                        <td>Programmer</td>--}}
{{--                        <td>2024-1-18</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<div class="container">
    <div class="card">
        @foreach($custom as $value)
        <div class="card-header text-center"><h2><b>{{$value->customer_name}}</b></h2></div>
        @endforeach
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ItemName</th>
                    <th>Added_date</th>
                    <th>Photo</th>
                    <th>KG</th>
                    <th>ItemPrice</th>
                </tr>
                </thead>
                @foreach($CIdata as $value)
                <tbody>
                <tr>
                    <td>{{$value->item_name}}</td>
                    <td>{{$value->added_date}}</td>
                    <td><img src="{{ url('images/'.$value->photo) }}" style="width: 30px; height: 30px"></td>
                    <td></td>
                    <td>{{$value->item_price}}</td>
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>
            <div class="d-flex justify-content-end me-5 pe-5">
                <h2>Total Price : {{$total}}</h2>
            </div>
        <a class="btn btn-success" href="/ajax/ajaxform">Back</a>
    </div>
</div>

@endsection
