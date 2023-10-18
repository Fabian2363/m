<?php

namespace App\Http\Controllers;
use App\persona;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\lugar_expedicion;
use App\Models\lugar_nacimiento;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validatsor;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;


class PersonasController extends Controller
{

  // listar  empelados 
  public function indexs(Request $request)
  {
     
    $vivienda=new persona();

      return view('empleados.create', compact('vivienda'));
  }
   



   
  public function create_personal(Request $data){
    if($data->ajax()){
        
        $validatedData = Validator::make($data->all(), array_merge([
           
            //"documento" => "required|min:1|numeric",
           // "id_expedicion" => "required|min:1|numeric",
       
        ], ));

        if ($validatedData->fails()) {
            return response()->json([
                'errors' => $validatedData->errors(),
                'validate' => false
            ]);
        }
        
            $validatedData = $validatedData->getData();
            $persona=null;
         {
                $persona = new persona();
            }    
            
             
            
          //  $persona->id_users = $validatedData['id_users'];
            
                          
            if($persona->save()!=1){
                return response()->json(['validate'=>false]);
            }    
            return response()->json(['validate'=>true,'id'=> ($persona->id)]);
    }

}


public function   datos ( $id_familia)
    {
        //$id_familia= base64_decode($id_familia);
        $datos = persona::select('persona.*')
        
        ->where(['persona.id', $id_familia])->get();

     
            return view('empleados.datos',compact('datos'));
        
        abort(404);
    }

  
  

    public function personaIndex($id_usuario){
        $datos = persona::select('persona.documento','users.email','persona.nombre','persona.id_users')
        ->join('users', 'persona.id_users', '=', 'persona.id_persona')
        ->join('municipioexpedicion', 'persona.id_expedicion', '=', 'municipioexpedicion.id_expedicion')
        ->join('departamentoexpedicioncc', 'municipioexpedicion.id_departamentoex', '=', 'departamentoexpedicioncc.id_departamentoex')
        
        ->where([['persona.id_users', $id_usuario]])->get();
        //$vivienda=new persona();
        $vivienda = User::find($id_usuario);
        //$vivienda= persona::find($id_usuario);
        $info['persona'] = DB::table("persona")->pluck("id_persona","documento");
        
        $info['departamento'] = DB::table("departamentoexpedicioncc")->pluck("nombre","id_departamentoex"); 
        return  view ('personas.personas',  $info,compact('vivienda','datos'));
    }


    public function indexdato($id_usuario)
    {
        //$id_familia= base64_decode($id_familia);
        //$id_vivienda= base64_decode($id_vivienda);
        
        $datos = persona::select('persona.documento','users.id','persona.id_users','persona.nombre','municipioexpedicion.nombre_municipio','departamentoexpedicioncc.nombre')
        ->join('users', 'persona.id_users', '=', 'persona.id_persona')
        ->join('municipioexpedicion', 'persona.id_expedicion', '=', 'municipioexpedicion.id_expedicion')
        ->join('departamentoexpedicioncc', 'municipioexpedicion.id_departamentoex', '=', 'departamentoexpedicioncc.id_departamentoex')
        
        ->where([['persona.id_users', $id_usuario]])->get();
            return view('misak',compact('datos'));

    }


    
  // seleccion de municipio 
    public function getmunicipio(Request $request){
      $municipio = DB::table("municipioexpedicion")
        ->where("id_departamentoex",$request->id_departamentoex)
       ->pluck("nombre_municipio","id_expedicion");
         return response()->json($municipio);
       }


    
    public function store3(Request $data){
        if($data->ajax()){
            
            $validatedData = Validator::make($data->all(), array_merge([
               
                "documento" => "required|min:1|numeric",
                "id_expedicion" => "required|min:1|numeric",
           
            ], ));

            if ($validatedData->fails()) {
                return response()->json([
                    'errors' => $validatedData->errors(),
                    'validate' => false
                ]);
            }
            
                $validatedData = $validatedData->getData();
                $persona=null;
             {
                    $persona = new persona();
                }    
                
                 
                $persona->documento = $validatedData['documento'];
                $persona->nombre = $validatedData['nombre'];
                $persona->primero_apellido = $validatedData['primero_apellido'];
                $persona->estado_civil = $validatedData['estado_civil'];
                $persona->tipo_documento = $validatedData['tipo_documento'];
                $persona->fecha_nacimiento = $validatedData['fecha_nacimiento'];
                $persona->id_expedicion = $validatedData['id_expedicion'];
              //  $persona->id_users = $validatedData['id_users'];
                
                              
                if($persona->save()!=1){
                    return response()->json(['validate'=>false]);
                }    
                return response()->json(['validate'=>true,'id_documento'=> ($persona->id_documento)]);
        }

    }
}
