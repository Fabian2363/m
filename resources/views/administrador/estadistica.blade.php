@extends('layouts.menu')

@section('content')

<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>@lang('Información POBLACIONAL MISAK- NU NAKCHAK ')</h1>
        <h2 class="">@lang(' Sistema de Información poblacional Misak SIPEMP')</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">@lang('Inicio')</a></li>
            <li><a href="#">@lang('Administrador')</a></li>
            <li class="active">@lang('Información poblacional')</li>
        </ol>
    </div>
</div>



<div class="contenedor_habitantes">
    <section style="padding: 10rem 0;" class="">
        <div class="col-sm-3 col-sm-6">
            <div class="information blue_info">
                <div class="information_inner">
                    <div class="info gray_symbols"><i class="fa fa-shopping-cart icon"></i></div>

                    <span>@lang('MUJERES-|-HOMBRES')</span>
                    <h1 class="bolded">{{$total_personas_m}} | {{$total_personas_f}}</h1>
                    <div class="infoprogress_blue">
                        <div class="blueprogress"></div>
                    </div>
                    <b class=""><small>@lang('MInformación total por genero')</small></b>
                    <div class="pull-right" id="work-progress2">
                        <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;"
                            width="47" height="25"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3 col-sm-6">
            <div class="information blue_info">
                <div class="information_inner">
                    <div class="info blue_symbols">
                    <i class="fa fa-shopping-cart icon">
                    
                    </i></div>
                    <span>@lang('VIVIENDAS')</span>
                    <h1 class="bolded"> {{$total_vivienda}}</h1>
                    <div class="infoprogress_blue">
                        <div class="blueprogress"></div>
                    </div>
                    <b class=""><small>@lang('Información total de viviendas')</small></b>
                    <div class="pull-right" id="work-progress2">
                        <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;"
                            width="47" height="25"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-sm-6">
            <div class="information red_info">
                <div class="information_inner">
                    <div class="info red_symbols"><i class="fa fa-comments icon"></i></div>
                    <span> @lang('HOGARES')</span>
                    <h1 class="bolded">{{$total_hogar}}</h1>
                    <div class="infoprogress_red">
                        <div class="redprogress"></div>
                    </div>
                    <b class=""><small>@lang('Información total de Hogares')</small></b>
                    <div class="pull-right" id="work-progress3">
                        <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;"
                            width="47" height="25"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-sm-6">
            <div class="information gray_info">
                <div class="information_inner">
                    <div class="info gray_symbols"><i class="fa fa-money icon">
                    </i></div>
                    <span>@lang('HABITANTES') </span>
                    <h1 class="bolded"> {{$total_personas}}</h1>
                    <div class="infoprogress_gray">
                        <div class="grayprogress"></div>
                    </div>
                    <b class=""><small>@lang('Información total de habitantes') </small></b>
                    <div class="pull-right" id="work-progress4">
                        <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;"
                            width="47" height="25"></canvas>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>

<style>
.contenedor_habitantes {
    margin-top: 10px;
    margin-inline-start: 10px;
}
</style>
<div class="row">
<div class="col-sm-12">
    <div class="panel-group  accordion accordion-color" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading ">

                <h4 class="panel-title ">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                        <i class="fa fa-angle-right"></i>
                        @lang(' Ver Información estadistica del censo poblacional Misak -SIPEMP')
                    </a>
                </h4>
            </div>
            <div style="height: 0px;" id="collapse4" class="panel-collapse collapse">
                <div class="panel-body help_color">


                    {{---foemulario datos estadisticos ---}}
                    <section style="padding: 5rem 0;">

                        <div class="container text-center">
                            <div class="row">





                                <div class="col-md-3">
                                    <p>@lang('Plantas Utilizado')</p>
                                    <canvas id="plantas" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>

                                <div class="col-md-3">
                                    <h5>@lang('Personas')</h5>
                                    <canvas id="categoria_personas" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>

                                <div class="col-md-3">
                                    <h5>@lang('Hablan Namuy Wam')</h5>
                                    <canvas id="hablan_namuy_wam" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">
                                    <h5>@lang('Escriben Namuy Wam')</h5>
                                    <canvas id="escriben_namuy_wam" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>

                                <div class="col-md-3">
                                    <h5>@lang('Medico Tradicional')</h5>
                                    <canvas id="medico_tradicional" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>

                                <div class="col-md-3">
                                    <h5>@lang('Comidad Propias')</h5>
                                    <canvas id="consumo_comidad_propias" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">
                                    <h5>@lang('Educación')</h5>
                                    <canvas id="educacion_misak" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>

                                <div class="col-md-3">
                                    <h5>@lang('Sostenimiento Economico')</h5>
                                    <canvas id="sostenimiento_economico" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>

                                <div class="col-md-3">
                                    <h5>@lang('Habla Español')</h5>
                                    <canvas id="habla_español" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">
                                    <h5>@lang('Escribe Español')</h5>
                                    <canvas id="escribe_español" width="200" height="200"></canvas>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
            <h5>@lang('Vestido Misak')</h5>
            <canvas id="vestimenta" width="200" height="200"></canvas>
        </div>
        <div class="col-md-1"></div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>


    </div>
</div>
</div>



<br> 
<br>
<br>
<br> 
<br>
<br>
@endsection

@section('script')

{{-- Chart.js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha512-QEiC894KVkN9Tsoi6+mKf8HaCLJvyA6QIRzY5KrfINXYuP9NxdIkRQhGq3BZi0J4I7V5SidGM3XUQ5wFiMDuWg==" crossorigin="anonymous"></script>
<script>
    let plantas = $('#plantas');
    let categoria_personas = $('#categoria_personas');
    let hablan_namuy_wam = $('#hablan_namuy_wam');
    let escriben_namuy_wam = $('#escriben_namuy_wam');
    let medico_tradicional = $('#medico_tradicional');
    let consumo_comidad_propias = $('#consumo_comidad_propias');
    let educacion = $('#educacion');
    let sostenimiento_economico = $('#sostenimiento_economico');
    let habla_español = $('#habla_español');
    let escribe_español = $('#escribe_español');
    let educacion_misak = $('#educacion_misak');
    let vestimenta = $('#vestimenta');

    let plantasData = @json($plantas);
    let categoria_personasData = @json($categoria_personas);
    let quienes_hablan_namuy_wamData = @json($quienes_hablan_namuy_wam);
    let quienes_escriben_namuy_wamData = @json($quienes_escriben_namuy_wam);
    let medico_tradicionalData = @json($medico_tradicional);
    let consumo_comidad_propiasData = @json($consumo_comidas_propias);
    let educacionData = @json($educacion);
    let sostenimiento_economicoData = @json($sostenimiento_economico);
    let habla_españolData = @json($habla_español);
    let escribe_españolData = @json($escribe_español);
    let educacion_misakData = @json($educacion_misak);
    let vestimentaData = @json($vestimenta);

    console.log(habla_españolData);
    console.log(escribe_españolData);
    console.log(educacion_misakData);
    console.log(vestimentaData);
    let labelAxuliar = [];
    let DataAxuliar = [];

    $(document).ready(function () {

        // Estadisticas De tipo de plantas
        crear_diagramas_pie(plantas, Object.values(plantasData), Object.keys(plantasData));

        // Estadistica Categorias de personas que hay en el sistema
        masterisar_datos(categoria_personasData);
        crear_diagramas_pie(categoria_personas, DataAxuliar, labelAxuliar);

        // Estadistica Cantidad de personas que hablan namuy Wam
        masterisar_datos(quienes_hablan_namuy_wamData);
        crear_diagramas_pie(hablan_namuy_wam, DataAxuliar, labelAxuliar);

        // Estadistica Nivel que escribe Namu Wam
        crear_diagramas_pie(escriben_namuy_wam, Object.values(quienes_escriben_namuy_wamData), Object.keys(quienes_escriben_namuy_wamData));

        // Estadistica Medico tradicional
        crear_diagramas_pie(medico_tradicional, Object.values(medico_tradicionalData), Object.keys(medico_tradicionalData));

        // Estadistica Consumo Comidas Propias
        crear_diagramas_pie(consumo_comidad_propias, Object.values(consumo_comidad_propiasData), Object.keys(consumo_comidad_propiasData));

        // Estadistica Nivel de educacion
        crear_diagramas_pie(educacion, Object.values(educacionData), Object.keys(educacionData));

        // Estadistica sostenimiento econocmico
        masterisar_datos(sostenimiento_economicoData);
        crear_diagramas_pie(sostenimiento_economico, DataAxuliar, labelAxuliar);
        
        // Estadstica Quienes Hablan Español
        crear_diagramas_pie(habla_español, Object.values(habla_españolData), Object.keys(habla_españolData));

        // Estadstica Quienes Escriben Español
        crear_diagramas_pie(escribe_español, Object.values(escribe_españolData), Object.keys(escribe_españolData));


        // educacion  primaria, secundaria, superior,  no tiene
        crear_diagramas_pie(educacion_misak, Object.values(educacion_misakData), Object.keys(educacion_misakData));

         // vestimenta 
         crear_diagramas_pie(vestimenta, Object.values(vestimentaData), Object.keys(vestimentaData));

        

    });

    function masterisar_datos(ArrayData = []){
        if(ArrayData.length > 0){
            labelAxuliar = [];
            DataAxuliar = [];
            $.map(ArrayData, (elemento, index) => {
                labelAxuliar.push(elemento.label);
                DataAxuliar.push(elemento.total);
            });
        }
    }

    function crear_diagramas_pie(lienzo ,data, labels){
        var myChart = new Chart(lienzo, {
        type: 'pie',
        data: {
            labels: labels ,
            datasets: [{
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
    });
    }

</script>

@endsection