<?php

namespace App\Exports;

use App\info_persona;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class ReporteCensoExport implements FromView
{

    public function view(): View
    {
        $Personas = info_persona::select(
            DB::raw('YEAR(CURRENT_DATE) AS vigencia'),
            'resguardo.codigo_resguardo as resguardo',
            'info_persona.comunidad_indigena',
            'hogar_p.id as familia',
            'personas.tipo_identificacion',
            'personas.docomento_persona',
            'personas.nombres',
            'personas.apellidos',
            'personas.fecha_nacimiento',
            'personas.parentesco',
            'info_persona.sexo',
            'personas.estado_civil',
            'info_persona.profecion_id as profesion',
            'personas.nivel_academico as escolaridad',
            'personas.n_integrantes as integrantes',
            'vereda.nombre_vereda as vereda',
            'sector.nombre_sector as sector',
            'info_persona.telefono'
        )
        ->join('personas', 'info_persona.persona_id', '=', 'personas.id')
        ->join('hogar_p', 'personas.hogar_id', '=', 'hogar_p.id')
        ->join('vivienda', 'hogar_p.vivienda_id', '=', 'vivienda.id')        
        ->join('sector', 'vivienda.codigo_sector', '=', 'sector.codigo_sector')
        ->join('vereda', 'sector.codigo_vereda', '=', 'vereda.codigo_vereda')
        ->join('zona', 'vereda.codigo_zona', '=', 'zona.codigo_zona')
        ->join('resguardo', 'zona.codigo_resguardo', '=', 'resguardo.codigo_resguardo')
        ->join('municipio', 'resguardo.codigo_municipio', '=', 'municipio.codigo_municipio')
        ->join('departamento', 'municipio.codigo_departamento', '=', 'departamento.codigo_departamento')
        ->orderBy('hogar_p.id')
        ->orderBy('personas.n_integrantes')  
        ->where('personas.estado_persona', 1)->get();

        return view('Exports_Excel.reporte_genera_censo_excel', [
            'personas' => $Personas
        ]);
    }
}
