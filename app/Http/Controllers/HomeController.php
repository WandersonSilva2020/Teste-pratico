<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;

class HomeController extends Controller
{
    public function index(){
        $events = Event::all();
        $users = User::all();

        $userId = auth()->user()->id;
        $user = auth()->user()->name;

        
        $eventosDoUsuario = Event::where('user_id', $userId);
        
        $numeroDeEventos = $events->count();
        $numeroMeusEventos = $eventosDoUsuario->count();

        
        return view('telaInicial',[
            'event' => $events,
            'numeroDeEventos' => $numeroDeEventos, 
            'user' => $user,
            'numeroMeusEventos' => $numeroMeusEventos
        ]);
    }

}
