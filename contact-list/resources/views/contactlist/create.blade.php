@extends('contactlist.layout')

@section('content')

    <form action="/contacts " method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name"/>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Phone"/>

        <label for="usuario_id">Your ID</label>
        <input type="text" id="usuario_id" name="usuario_id" placeholder="Write your ID"/>

        <!--<input type="hidden" id="usuario_id" name="usuario_id" value=""/>-->

        <button type="submit" id="submit" name="submit" placeholder="Submit">Submit</button>

    </form>
@endsection
