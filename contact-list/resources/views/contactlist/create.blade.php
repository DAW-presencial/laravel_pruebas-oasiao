@extends('contactlist.layout')

@section('content')

    <form action="/contacts " method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Name"/>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Phone"/>

        <button type="submit" id="submit" name="submit" placeholder="Submit">Submit</button>

    </form>
@endsection
