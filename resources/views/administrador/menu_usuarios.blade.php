@extends('layouts.menu')

@section('content')

<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>USUARIOS </h1>
        <h2 class="">Nuevos Usuarios</h2>
    </div>
    <div class="pull-right">
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Usuarios</a></li>
            <li class="active">Nuevos Usuarios</li>
        </ol>
    </div>
</div>


<div class="container">

    <!-- Fin Informacion menu izquierda-->
    <div class="col-md-12">
        <div class="ContenedorFormularioCenso">

            <table>
                <tbody>
                    <tr>
                        <td style="width:3px;"></td>
                        <td title="Censo vivienda de familia Misak">
                            <table class="estatic">
                                <tbody>
                                    <tr>
                                        <td><b href=""> USUARIOS INGRESADOS EN SIPEMP </b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>


                        <td style="width:3px;"></td>
                        <td title="Información de la persona que viven dentro de la familia ">
                            <table class="active">
                                <tbody>
                                    <tr>
                                        <td>
                                            <b onclick="location.href='{{ url('Ingresar_Usuarios') }}'"> INGRESAR NUEVO
                                                USUARIO DEL SIPEMP </b>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </td>

                    </tr>
                </tbody>
            </table>

            <div class="color_infor noPrint" style="margin-top: 15px;">
                <span class="color_infor  noPrint">Usted se encuentra en:&nbsp;&nbsp;Usuarios &gt; <font
                        color="#666666"> Nuevos Usuarios en SIPEMP </font></span>
            </div>

            <!--FIN titulo_infobasica-->

            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios del sistema sipemp
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="solicitudinfo">
                        <thead>
                            <tr>
                                <th>N° Documento ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Rol</th>
                                <th>Fin de contrato</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->cedula }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->apellidos }}</td>
                                <td>{{ $user->id_rol }}</td>
                                <td>{{ $user->fin_contrato }}</td>
                                <td>{{ $user->id_rol }}</td>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-default">
                                        Ver
                                    </a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-default">
                                        Editar
                                    </a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-danger">
                                        Cambiar Estado
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--FIN ContenedorFormularioCenso-->
    </div>
    <!--FIN col-md-9-->
</div>


@endsection