@extends('contacts.layout')

@section('content')

    <form action="/agenda/{{ $contact->id }} " method="POST">
    @csrf
    @method('PUT') <!-- method('PUT') -> PUT OR PATCH, TO MODIFY THE RESOURCE -->
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $contact->name ?? '') }}" required/>

        <label for="phone">Phone</label>
        <input type="number" id="phone" name="phone" value="{{ old('phone',$contact->phone ?? '') }}" required/>

        <button type="submit" id="submit" name="submit" placeholder="Submit">Submit</button>
    </form>

    @if( $errors->any() )
        <div>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
@endsection
