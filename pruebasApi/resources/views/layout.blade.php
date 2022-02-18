<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Styles -->
    <!--<link rel="stylesheet" type="text/css" href="css/styles.css"/>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        html {
            padding: 0;
        }

        table, th, td {
            border: 1px solid black;
        }

        .cover {
            object-fit: cover;
            width: 50px;
            height: 25vw;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

        *, body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
        }


        .form-holder {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .form-holder .form-content {
            position: relative;
            text-align: center;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 60px;
        }

        .form-content .form-items {
            background-color: #152733;
            border: 3px solid #fff;
            padding: 40px;
            display: inline-block;
            width: 100%;
            min-width: 540px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            text-align: left;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .form-content h3 {
            color: #fff;
            text-align: left;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .form-content h3.form-title {
            margin-bottom: 30px;
        }

        .form-content p {
            color: #fff;
            text-align: left;
            font-size: 17px;
            font-weight: 300;
            line-height: 20px;
            margin-bottom: 30px;
        }


        .form-content label, .was-validated .form-check-input:invalid ~ .form-check-label, .was-validated .form-check-input:valid ~ .form-check-label {
            color: #fff;
        }

        .form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
            width: 100%;
            padding: 9px 20px;
            text-align: left;
            border: 0;
            outline: 0;
            border-radius: 6px;
            background-color: #fff;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            margin-top: 16px;
        }

        .form-content textarea {
            position: static !important;
            width: 100%;
            padding: 8px 20px;
            border-radius: 6px;
            text-align: left;
            background-color: #fff;
            border: 0;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            outline: none;
            resize: none;
            height: 120px;
            -webkit-transition: none;
            transition: none;
            margin-bottom: 14px;
        }

        .form-content textarea:hover, .form-content textarea:focus {
            border: 0;
            background-color: #ebeff8;
            color: #8D8D8D;
        }

        .panel {
            font-family: 'Raleway', sans-serif;
            padding: 0;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        }

        .panel .panel-heading {
            background: #535353;
            padding: 15px;
            border-radius: 0;
        }

        .panel .panel-heading .btn {
            color: #fff;
            background-color: #000;
            font-size: 14px;
            font-weight: 600;
            padding: 7px 15px;
            border: none;
            border-radius: 0;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-heading .btn:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .panel .panel-heading .form-horizontal .form-group {
            margin: 0;
        }

        .panel .panel-heading .form-horizontal label {
            color: #fff;
            margin-right: 10px;
        }

        .panel .panel-heading .form-horizontal .form-control {
            display: inline-block;
            width: 80px;
            border: none;
            border-radius: 0;
        }

        .panel .panel-heading .form-horizontal .form-control:focus {
            box-shadow: none;
            border: none;
        }

        .panel .panel-body {
            padding: 0;
            border-radius: 0;
        }

        .panel .panel-body .table thead tr th {
            color: #fff;
            background: #8D8D8D;
            font-size: 17px;
            font-weight: 700;
            padding: 12px;
            border-bottom: none;
        }

        .panel .panel-body .table thead tr th:nth-of-type(1) {
            width: 120px;
        }

        .panel .panel-body .table thead tr th:nth-of-type(3) {
            width: 50%;
        }

        .panel .panel-body .table tbody tr td {
            color: #555;
            background: #fff;
            font-size: 15px;
            font-weight: 500;
            padding: 13px;
            vertical-align: middle;
            border-color: #e7e7e7;
        }

        .panel .panel-body .table tbody tr:nth-child(odd) td {
            background: #f5f5f5;
        }

        .panel .panel-body .table tbody .action-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .panel .panel-body .table tbody .action-list li {
            display: inline-block;
        }

        .panel .panel-body .table tbody .action-list li a {
            color: #fff;
            font-size: 13px;
            line-height: 28px;
            height: 28px;
            width: 33px;
            padding: 0;
            border-radius: 0;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-body .table tbody .action-list li a:hover {
            box-shadow: 0 0 5px #ddd;
        }

        .panel .panel-footer {
            color: #fff;
            background: #535353;
            font-size: 16px;
            line-height: 33px;
            padding: 25px 15px;
            border-radius: 0;
        }


    </style>
</head>
<body onload="index_js()">

<ul class="navbar-nav d-flex flex-row gap-5">
    <li class="nav-item">
        <a class="nav-link" href="/contacts">Home</a>
    </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacts/create">Add contact</a>
            </li>

</ul>


{{--<div id="response">--}}
{{--
    <button onclick="location.href='/contacts'">Home</button>
    CREATE NEW CONTACT:
    <form name="form" id="form">
        <input type="text" name="name"/>
        <input type="text" name="surname"/>
    </form>
--}}

    {{--DELETE / BY ID: <input type="number" name="id" id="id"/>

    <button onclick="index_js()">Index</button>--}}
{{--    <button onclick="store_js()">Crear</button>--}}
    {{--<button onclick="show_js()">Show</button>
    <button onclick="update_js()">Update</button>
    <button onclick="destroy_js()">Destroy</button>--}}
{{--</div>--}}
@yield('content')
</body>
<script src="/js/apiHelper.js"></script>
</html>
