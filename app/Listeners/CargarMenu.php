<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CargarMenu
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $fechaActual = Carbon::now();
        if($fechaActual<$event->user->fin_contrato && $event->user->estado==1){
            \Session::forget('permisos');
            $permisos=\App\Permiso::select('permisos.id','permisos.permiso','permisos.ruta')
            ->join('permisos_usuario','permisos_usuario.id_permiso','permisos.id')
            ->where('permisos_usuario.id_rol',$event->user->id_rol)
            ->get()->toArray();
            \Session::push('permisos',$permisos);
        }else{
            Auth::logout();
            return redirect('/login')->with('message', 'Puede que este usuario este desactivado o su contrato este vencido.');
        }
    }
}
