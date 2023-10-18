<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Autorizar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id_permiso)
    {
        if(\App\PermisoUsuario::where([['id_rol',Auth::user()->id_rol],['id_permiso',$id_permiso]])->exists()){
            return $next($request);
        }else{
            abort(404);
        }
        
    }
}
