@extends('usuario.layout')

@section('content')
    <table>
        <tr>
            <th>Username</th>
        </tr>
    @foreach( $usuarios as $usuario )
            <tr>
                <td class="user"><a href="/usuarios/{{ $usuario->id }}">
                        {{ $usuario->username }}
                    </a>
                    <form action="/usuarios/{{ $usuario->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="trash" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
    @endforeach
    </table>
@endsection
