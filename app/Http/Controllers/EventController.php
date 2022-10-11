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
        $events -> autor = auth()->user()->name;
        $events->save();
        return redirect('/home')-> with('success',' O evento foi criado com sucesso!');

    }
    public function meusEventos(){
            $userId = auth()->user()->id;
            
            $eventUser = DB::select('select * from events where user_id = ?', [$userId]);

            return view('event.MeusEventos',['eventUser'=> $eventUser]);
    }

    public function edit(){
        $event = Event::all();
        $userName = auth()->user()->name;
        return view('Event.edit',['event'=> $event,'userName'=>$userName]);
    }

    public function destroy($id){
        Event::findOrFail($id)->delete(); 
        return redirect('/administracao/edit/')->with('Delete','Evento excluido com sucesso !'); 
    }

    public function atualizar($id){
        /*--- Exibe a tela de atualizar evento ---*/
        $event = Event::FindOrFail($id);
        return view('Event.AtualizarEventos',['event'=>$event]);
    }

    public function update(Request $request){
        Event::findOrFail($request->id)->update($request->all());
        return redirect('home')->with('update','Evento Atualizado com sucesso!');
    }    
}
