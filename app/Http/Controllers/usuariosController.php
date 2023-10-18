<?php

namespace App\Http\Controllers;

	
use App\Http\Requests\ValidarFormulariousuarios; 
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class usuariosController extends Controller
{
    
   

    function create(ValidarFormulariousuarios $data){

     
        $user = User::create([
           
            'name' => $data['name'],
            //'apellidos' => $data['apellidos'],
           // 'cargo' => $data['cargo'],
            //'fin_contrato' => $data['fin_contrato'],
           // 'cedula' => $data['cedula'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
          
       ]);
    
      // return view("mensajes.msj_correcto")->with("msj","Información Guardado en el sistema ");
       //return view('administrador.ingresar_usuarios')->with('msj', 'Usuario guardado con éxito');
       return ['validate'=>true,'id'=>$user->id];
    
    }  
}
