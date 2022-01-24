@extends('contacts.layout')

@section('content')

    <form action="/agenda/{{ $contact->id }} " method="POST">
    @csrf
    @method('PUT') <!-- method('PUT') -> PUT OR PATCH, TO MODIFY THE RESOURCE -->
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $contact->name }}"/>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}"/>

        <button type="submit" id="submit" name="submit" placeholder="Submit">Submit</button>

    </form>
@endsection
