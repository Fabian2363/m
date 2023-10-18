<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::get();
        $users = User::select('users.*','roles.name as rol_name')
        ->join('roles', 'roles.id', '=', 'users.id_rol')
        ->paginate(5);

        return view('/administrador.ingresar_usuarios',compact('roles', 'users'));
    }



    /**
     * Display the specified resource.
     *
     * @param  Resquest
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){

     
        if($request->ajax()){

            try {
                if($request->id_usuario > 0){ // Actualizar
                    $user = User::findOrFail($request->id_usuario);
                    $validatedData = Validator::make($request->all(), array_merge([
                        'nombres' => 'required|string|min:5|max:255',
                        'apellidos' => 'string|min:5|max:255',
                        'email' => ["required",
                                    "email",
                                    Rule::unique('users', 'email')->where(function ($query) use($request) {
                                        return $query->where('id', "!=", $request->id_usuario);
                                    })], //consultar que este numero de documento no exista.
                        'rol'=>'required|numeric|min:1|exists:roles,id',
                        'documento' => ["required",
                                        "min:1",
                                        "numeric", 
                                        Rule::unique('users', 'cedula')->where(function ($query) use($request) {
                                            return $query->where('id', "!=", $request->id_usuario);
                                        })], //consultar que este numero de documento no exista.
                        'cargo' => 'required|string|min:5',
                        'fin_contrato_fecha' => 'required|date_format:Y-m-d',
                        'fin_contrato_hora' => 'required|date_format:H:i',
                        ], ($request->password!=null?['password' => 'required|confirmed|max:30']:[])));
                }else{ // Registrar
                    $validatedData = Validator::make($request->all(), [
                        'nombres' => 'required|string|min:5|max:255',
                        'apellidos' => 'string|min:5|max:255',
                        'email' => 'required|max:255|email|unique:users',//Cuando registrar
                        'rol'=>'required|numeric|min:1|exists:roles,id',
                        'password' => 'required|confirmed|max:20',
                        'documento' => 'required|max:20|unique:users,cedula',
                        'cargo' => 'required|string|min:5',
                        'fin_contrato_fecha' => 'required|date_format:Y-m-d',
                        'fin_contrato_hora' => 'required|date_format:H:i',
                    ]);
                    $user = new User();
                }

        
                if ($validatedData->fails()) {
                    return response()->json([
                        'errors' => $validatedData->errors(),
                        'validate' => false
                    ]);
                }

                $user->cedula = $request->documento;
                $user->name = $request->nombres;
                $user->apellidos = $request->apellidos;
                $user->email = $request->email;
                $user->cargo = $request->cargo;
                $user->fin_contrato = $request->fin_contrato_fecha." ".$request->fin_contrato_hora;
                if($request->password != null){
                    $user->password =Hash::make($request->password);
                }
                $user->id_rol = $request->rol;
                $user->save();
    
               return ['validate'=>true, 'id' => $user->id, 'message' => 'La Acci贸n Fue ejecutada correctamente'];

            } catch (\Throwable $th) {
                dd($th);
               return ['validate'=>false];

            }

        }
    
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
   // {
       // $user = User::find($id);

       // return view('users.show', compact('user'));
  //  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario guardado con 茅xito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->estado = $user->estado==1?0:1;
        $user->save();

        return response()->json([
            'validate' => true,
            'message' => "El cambio de estado exitoso.",
        ]);
    }
}
