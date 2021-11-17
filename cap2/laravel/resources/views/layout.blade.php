<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Agenda</h1>
<form>
    <h5>Add your contact:</h5>
    <input type="text" name="person[]" placeholder="Name"/> <!--required="required"-->
    <input type="number" name="person[]" placeholder="Phone"/>
    <input type="submit" name="submit" value="Submit"/>
    <input type="submit" name="restart" value="Restart"/>
</form>

<h1>@yield('cookies')</h1>
</body>
</html>

