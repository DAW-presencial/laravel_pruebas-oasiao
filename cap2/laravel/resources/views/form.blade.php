@extends('layout')

@section('form')
    <form >
        <label for="nombre">@php echo __('Nombre') @endphp</label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellido1">@lang('Primer apellido')</label>
        <input type="text" id="apellido1" name="apellido1">
        <label for="apellido2">@lang('Segundo apellido')</label>
        <input type="text" id="apellido2" name="apellido2">
        <input type="submit" name="submit" value="@lang('Enviar')">
    </form>
@endsection
