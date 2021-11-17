@extends('layout')

@section('cookies')

@php
global $name,$phone;
$agenda = [];
$person = [];



if (isset($_GET['submit'])) {
    /* if(!isset($_SESSION['agenda'])) {
         //$backup = $_COOKIE['PHPSESSID'];
         //session_id($backup);*/
    session_start();
    $person = $_GET["person"];

    $agenda = $_SESSION['agenda'];


    if ($person[0] == "") {
        echo "No has introducido nombre! Vuelve a intentarlo.";
    } else {

        if ($person[1] == "") {
            //si  el campo telefono no tiene valor, borramos el contacto que coincida con el nombre introducido
            $agenda = delete($agenda, $person[0]);
        } else {
            /**
             * En caso contrario, cogemos los nuevos valores y las anadimos en la variable agenda
             */
            $agenda[$person[0]] = $person[1]; //cogemos los nuevos valores y las añadimos dentro de agenda
        }
    }
    displayForm($agenda);
    output($agenda);

}
else {
    displayForm($agenda);
}



@endphp
@endsection
