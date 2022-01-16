<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all()->toJson();
        $usuarios = json_decode($usuarios);

        //dd($contactList);//me muestra la vista index.blade.php y le paso por parametro $contactList

        return view('usuario.index', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('usuario.create');
    }

    public function store(Request $request)
    {
        $usuario = Usuario::create([ //you can do put make but you have to use save();
            'username' => $request->input('username'), //field => $request->input('name of the input')
        ]);

        return redirect('/usuarios');
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.show')->with('usuario', $usuario);
    }

    public function destroy($id)
    {
        $usuario = Usuario::where('id', $id)->first();

        $usuario->delete();

        return redirect('/usuarios');
    }
}
