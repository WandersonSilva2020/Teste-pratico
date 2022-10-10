<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class NivelPermissao{

public function verificacao(){
        $userId = auth()->user()->role;
        if($userId == 2 ){
            return view('Event.edit');
        }else{
            return ('acessoNegado');
        }       
}
}

?>