<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agendaController extends Controller
{
    public function agenda(){
        return view('contador',compact('visitas'));
    }
}
