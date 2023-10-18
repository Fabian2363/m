<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
Use App\Http\Requests\ViviendaRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Personas;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function showRegistrationForm()
    {
       
        //$datos = Personas::findOrFail($id_hogar);
        return view('auth.register');
    }
/*
    public function showRegistrationForm($id_hogar)
    {
        $id_hogar=base64_decode($id_hogar);
        $datos = Personas::where('docomento_persona',$id_hogar)->get();
        
        //$datos = Personas::findOrFail($id_hogar);
        return view('auth.register',compact('datos'));
    }*/

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function vista_register($id)
    {
        $datos = DB:: table('personas')
        
        ->join('info_persona', 'personas.id', '=', 'info_persona.persona_id')
        ->where('personas.docomento_persona',$id)->get();

        return view('auth.register');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'cargo' => ['required', 'string', 'max:255'],
            'rol'=>'required|numeric|min:1|exists:roles,id',
            'cedula' => ['required', 'string', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apellidos' => $data['apellidos'],
            'cedula' => $data['cedula'],
            'cargo' => $data['cargo'],
            'id_rol' =>$data['rol'], 
            'fin_contrato' =>$data['fin_contrato'], 
            'email' => $data['email'],
            
            'password' => Hash::make($data['password']),
        ]);
    }

    

   
}
