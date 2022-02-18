@extends('layout')

@section('title','Orders')

@section('content')


    <div class="container-fluid">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <td>Actions</td>
                <td>Name</td>
                <td>Phone number</td>
            </tr>
            </thead>
            <tbody>
            @foreach( $contacts as $contact )
                <tr>
                    <td>
                        <ul class="action-list d-flex">
                            <li style="list-style: none">
                                <button onclick="location.href='/contacts/{{ $contact->id }}/edit'" class="btn btn-primary" name="{{ $contact->id }}">
                                    Edit
                                </button>

                            </li>

                            <li style="list-style: none">
                                <button class="destroy btn btn-danger" name="{{ $contact->id}}">
                                    Delete
                                </button>
                            </li>

                            <li style="list-style: none">
                                <button class="show btn btn-info" name="{{ $contact->id}}">
                                    Show
                                </button>
                            </li>
                        </ul>
                    </td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

