<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contadorController extends Controller
{
    public function contador($visitas = 0){
        return view('contador',compact('visitas'));
    }
}
