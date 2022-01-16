<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
    <style>
        *{
            margin:0;
            padding: 0;
        }

        .tableUsers{
            display: flex;
            justify-content: center;
            margin-top: 2vh;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        table, td, th {
            border: 1px solid black;
        }

        table {
            width: 40vh;
            border-collapse: collapse;
        }

        .contacts{
            display: flex;
            flex-direction: column;
        }

        .trash{
            display: flex;
            background-color: white;
            border: none;
        }

        .user{
            display: flex;
            justify-content: space-between;
        }
    </style>
    <script src="https://kit.fontawesome.com/a87bd14a53.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

    <ul>
        <li><a href="/usuarios">Home</a></li>
        <li><a href="/usuarios/create">Add new user</a></li>
    </ul>

    <div class="tableUsers">
        @yield('content')
    </div>

</div>

</body>
</html>
