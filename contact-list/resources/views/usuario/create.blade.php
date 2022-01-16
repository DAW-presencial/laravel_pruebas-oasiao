@extends('usuario.layout')

@section('content')
    <form action="/usuarios " method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username"/>

        <button type="submit" id="submit" name="submit" placeholder="Submit">Submit</button>
    </form>
@endsection
