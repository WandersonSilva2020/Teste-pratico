<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\User;
use Illuminate\Support\Facades\DB;

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
        $events -> user_id  = auth()->user()->id;    
        $events->save();
        return redirect('/home')-> with('success',' O evento foi criado com sucesso!');

    }
    public function meusEventos(){
            $userId = auth()->user()->id;

            $eventUser = DB::select('select * from events where user_id = ?', [$userId]);

            return view('event.MeusEventos',['eventUser'=> $eventUser]);
    }
}
