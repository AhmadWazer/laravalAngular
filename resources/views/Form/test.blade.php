@extends('layouts.app')

@section('content')
    <style>
        .calculator {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;
            max-width: 300px;
            margin: 0 auto;
            padding: 10px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }

        .calculator button {
            padding: 10px;
            font-size: 20px;
            text-align: center;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 5px;
            cursor: pointer;
        }

        .calculator button:hover {
            background-color: #e6e6e6;
        }
        .calculator .input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        .calculator .result {
            font-size: 20px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
        <script src=
                    "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>

    <div class="container">
    <div class="calculator" id="dddq">
        <button>1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>5</button>
        <button>6</button>
        <button>7</button>
        <button>8</button>
        <button>9</button>
        <button>0</button>
        <button>+</button>
        <button id="clear">Clear</button>
        <button>-</button>
        <button>*</button>
        <button>/</button>
        <button class="equal">=</button>
        <input class="input" id="input" type="text" placeholder="0">
        <input class="input" id="result" type="text" placeholder="">
    </div>

        </div>
    <script>
        // $(document).ready(function() {
        //     // Get the input field
        //     var input = $("#input");
        //     // Get the buttons
        //     var buttons = $("#dddq button");
        //     // Bind the click event to the buttons
        //     buttons.click(function() {
        //         // Get the button text
        //         var text = $(this).text();
        //         // Add the text to the input field
        //         input.val(input.val() + text);
        //     });
        //     // Get the clear button
        //     var clearButton = $("#clear");
        //     // Bind the click event to the clear button
        //     clearButton.click(function() {
        //         // Clear the input field
        //         $(input).val("");
        //
        //         // Clear the result field
        //         $(input).val("");
        //     });
        //     // Bind the click event to the equal button
        //     $(".equal").click(function() {
        //         // Get the input value
        //         var value = input.val();
        //         // Calculate the result
        //         var result = eval(value);
        //         // Display the result
        //         $(input).val(result);
        //     });
        // });
        $(document).ready(function() {
            // Get the input field
            var input = $("#input");

            // Get the buttons
            var buttons = $("#dddq button");

            // Bind the click event to the buttons
            buttons.click(function() {
                // Get the button text
                var text = $(this).text();

                // Add the text to the input field
                input.val(input.val() + text);
            });

            // Bind the keyup event to the input field
            input.keyup(function() {
                // Get the input value
                var value = input.val();

                // Calculate the result
                var result = eval(value);

                // Display the result
                $("#result").html(result);
            });

            // Bind the click event to the equal button
            $("#equal").click(function() {
                // Get the input value
                var value = input.val();

                // Calculate the result
                var result = eval(value);

                // Display the result
                $("#result").html(result);
            });
        });
    </script>
    <div class="container">
        <h2>laragon & phpStorm</h2>
        <ul>
            <li>Created laravel Project in Laragon.</li>
            <li>Created Register/Login use Laravel Terminal.</li>
            <li>Create Database in laragon.</li>
            <li>Create Database table newuser, in laravel migration.</li>
            <li>Create New Seeder For Store Data In Database Table newuser.</li>
            <li>Created CRUD(Create, Update & Delete) For a Table.</li>
            <li>All Stored data Show in This Table.</li>
            <li>When Click On Create the Form Will Open.</li>
            <li>When Click On Edit the Page Open Where You Edit And Update The Selected User Data.</li>
            <li>When Click On Delete An Alert box Display Where the User Conform Delete Or NotDelete.</li>
            <li>Created Pagination For the Table, And Show 5 ids in A Page.</li>
            <li>Created Validation For The Form, When user not fill any field an error message shown.</li>
            <li>Show Conformation Message When a Process Complete.</li>
        </ul>
    </div>
{{--to fatch data from database--}}
    <?php
    $conn = mysqli_connect("localhost", "root", "", "laravel_first");
    $result = mysqli_query($conn, "SELECT * FROM newuser");

    $data = array();
    while ($row = mysqli_fetch_object($result))
    {
        array_push($data, $row);
    }
    echo json_encode($data);
    exit();
    ?>
@endsection

