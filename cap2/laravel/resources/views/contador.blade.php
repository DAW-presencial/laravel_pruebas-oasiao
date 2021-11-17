@extends('layout')

@section('cookies')

@php
if($visitas>0)$_COOKIE['visits'] = $visitas;
if(isset($_COOKIE['visits'])){
    setcookie('visits',++$_COOKIE['visits']);
}
else
{
    setcookie('visits',1);

}

$output = '<h1>Esta cookie ha sido utilizada ' .$_COOKIE['visits']. ' veces.</h1>';
echo $output;
@endphp
@endsection
