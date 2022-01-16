@extends('contactlist.layout')

@section('content')
    @foreach($contactlist as $contact)
        <ul>
            <a href="contacts/{{ $contact->id }}/edit">Edit &rarr;</a>
            <form action="/contacts/{{ $contact->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Delete &rarr;</button>
            </form>

            <li>{{ $contact->id }}</li>
            <a href="/contacts/{{ $contact->id }}"><li>{{ $contact->name }}</li></a>
            <li>{{ $contact->phone }}</li>
        </ul>
    @endforeach
@endsection
