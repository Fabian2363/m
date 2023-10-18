<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViviendaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ubicación_vivienda'=>'required',
            'numero_hogares'=>'required',
            'estado_conservacion'=>'required',
            'periodo_construccion'=>'required',
            'forma_casa'=>'required',
            'tamaño_casa'=>'required',
            'servicio_internet'=>'required',
            'numero_cuertos'=>'required',
            'cuartos_usados '=>'required',
            'material_paredes_id'=>'required',
            'material_piso_id'=>'required',
            'material_cocina_id'=>'required',
            'material_techo_id'=>'required',
            'suministro_agua_id'=>'required',
            'servicio_energia_id'=>'required',
            'servicio_sanitario_id'=>'required',
        ];
    }
}
