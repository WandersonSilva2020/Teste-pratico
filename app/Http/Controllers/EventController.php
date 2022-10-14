<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Mail\envioDeEmailNovoVeiculo;
use App\Mail\envioDeEmailEditarVeiculo;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function create(){
        return view('Event.NovoVeiculo');
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

        $id = auth()->user()->id;
        $userMail = auth()->user()->email;
        $user = User::where('id', $id)->first();
        
        Mail::to($user->email)->send(new envioDeEmailNovoVeiculo($userMail,$events));
        return redirect('/home')-> with('success',' O veículo foi registrado com sucesso!',);

    }
    public function meusVeiculos(){
        $userId = auth()->user()->id;
        $eventUser = DB::select('select * from events where user_id = ?', [$userId]);
        return view('event.MeusVeiculos',['eventUser'=> $eventUser]);
    }

    public function edit(){
        $event = Event::all();
        $userName = auth()->user()->name;

        return view('Event.edit',['event'=> $event,'userName'=>$userName]);
    }

    public function destroy($id){
        Event::findOrFail($id)->delete(); 
        return redirect('/administracao/edit/')->with('Delete','Veículo excluido com sucesso !'); 
    }

    public function atualizar($id){
        /*--- Exibe a tela de atualizar evento ---*/
        $event = Event::FindOrFail($id);
        return view('Event.AtualizarVeiculo',['event'=>$event]);
    }

    public function update(Request $request){
        Event::findOrFail($request->id)->update($request->all());
        $dados = new Event;
        $dados = Event::findOrFail($request->id);
    
        $id = auth()->user()->id;
        $userMail = auth()->user()->email;
        $userName = auth()->user()->name;
        
        $user = User::where('id', $id)->first();
        Mail::to($user->email)->send(new envioDeEmailEditarVeiculo($userMail,$user,$dados,$userName));
        
        return redirect('home')->with('update','Veículo Atualizado com sucesso!');
    }    
}
