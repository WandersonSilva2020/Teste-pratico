<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
    public function create(){
        return view('Event.NovoEvento');
    }

    public function store(Request $request){
        $events = new Event;
        $events -> placa =  $request -> placa;
        $events -> renavam = $request -> renavam;
        $events -> modelo = $request -> modelo;
        $events -> marca = $request -> marca;
        $events -> ano = $request -> ano;
        $events -> propietario = $request -> propietario;      
        $events->save();
        $codigoDeResultado = '1';
        return redirect('/home')-> with('success',' O evento foi criado com sucesso!');

    }
}
