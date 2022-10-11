<?php

namespace App\Http\Middleware;

use Closure;

class controleDeAcesso
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
            $userId = auth()->user()->role;
            if($userId == 2 ){
                return $next($request);
            }else{
                return redirect ('/home')->with('ERRO','Acesso Negado ! Você não tem permissão para acessar a Area de administração !');
            }
        
    }
}
