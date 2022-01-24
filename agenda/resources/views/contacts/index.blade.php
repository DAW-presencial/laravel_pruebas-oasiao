<?php
$users = \App\Models\User::where('id',$_COOKIE['user'])->get()->toJson();
$users = json_decode($users);
foreach ($users as $user){
    $name = $user->name;
    $email = $user->email;
}?>


@extends('contacts.layout')

@section('content')
    <div class="contacts">
        <h1>{{ $name }}'s contacts</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

        @forelse( $contacts as $contact ) <!--$model->function as item-->

            <tr>
                <td>
                    {{ $contact->name }}
                </td>

                <td>
                {{ $contact->phone }} <!-- al ser un objeto, cogemos los valores de esta manera -->
                </td>

                <td><a href="/agenda/{{ $contact->id }}/edit">✏️</a></td>
                <td>
                    <form method="post" action="/agenda/{{ $contact->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border:none; display:flex;">🗑️</button>
                    </form>
                </td>
            </tr>

            @empty
                <p>No contacts found</p>
        @endforelse
    </div>

    @can('create',$newContacts)
    <a href="../agenda/create">Add new contact</a>
    @endcan
@endsection
