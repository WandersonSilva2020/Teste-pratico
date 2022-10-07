<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class HomeController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('telaInicial',['event' => $events ]);
    }
}
