@extends('usuario.layout')

@section('content')
    <div class="contacts">
        <h1>{{ $usuario->username }}'s contacts</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

        @forelse( $usuario->contactLists as $contact ) <!--$model->function as item-->

            <tr>
                <td>
                    {{ $contact['name'] }}
                </td>

                <td>
                {{ $contact['phone'] }} <!-- al ser un objeto, cogemos los valores de esta manera -->
                </td>

                <td>
                    <a href="../contacts/{{ $contact->id }}/edit"> &rarr; <i class="fa-solid fa-square-pen"></i></a>
                </td>

                <td>
                    <form action="../contacts/{{ $contact->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="trash" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>

            @empty
                <p>No contacts found</p>
        @endforelse
    </div>

    <a href="../contacts/create">Add new contact</a>
@endsection
