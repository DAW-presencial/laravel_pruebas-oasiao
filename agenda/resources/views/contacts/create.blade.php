@extends('contacts.layout')

@section('content')

        <form action="/agenda " method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required/>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Phone" required/>

            <input type="hidden" id="user_id" name="user_id" value="{{ $user_id }}"/>

            <button type="submit" id="submit" name="submit" placeholder="Submit">Submit</button>
        </form>

@endsection
