@extends('layouts.menu')

@section('content')

<!--\\\\\\\ contentpanel start\\\\\\-->
<div class="pull-left breadcrumb_admin clear_both">
    <div class="pull-left page_title theme_color">
        <h1>USUARIOS</h1>
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

    <div class="row">
        <div class="col-md-12">
            <div class="ContenedorFormularioCenso">
    
                <div class="color_infor noPrint" style="margin-top: 15px;">
                    <span class="color_infor  noPrint">Usted se encuentra en:&nbsp;&nbsp;Usuarios &gt; <font
                            color="#666666"> Nuevos Usuarios en SIPEMP </font></span>
                </div>
    
                <!--MENSAJE DE EERORO  , VALIDACION DEL FORMULARIO--->
    
                <form id="Usuario" method="post" action="Ingresar_Usuarios/Guardado">
    
                    @csrf
    
                    <div class="col-md-12 col-sm-12 col-xs-12">
    
                        <div class="col-md-12 col-sm-12 col-xs-12">
    
                            <div class="col-md-6 col-sm-12 col-xs-12">
    
                                <input type="hidden" id="id_usuario" name="id_usuario" value="0">
                                <div class="form-group row">
                                    <label for="nombres"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="nombres" type="text"
                                            class="form-control" name="nombres"
                                            value="{{ old('nombres') }}" required autocomplete="name" autofocus>
                                        <div class="text-danger" name="nombres"><small><ul></ul></small></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="apellidos"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="apellidos" type="text"
                                            class="form-control @error('apellidos') is-invalid @enderror" name="apellidos"
                                            value="{{ old('apellidos') }}" required autocomplete="name" autofocus>
                                        <div class="text-danger" name="apellidos"><small><ul></ul></small></div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="documento"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Nomero de documento') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="documento"
                                            class="form-control" name="documento"
                                            value="{{ old('documento') }}" required autocomplete>
                                        <div class="text-danger" name="documento"><small><ul></ul></small></div>
                                    </div>
                                </div>
    
    
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        <div class="text-danger" name="email"><small><ul></ul></small></div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Contraseña Asignado') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control" name="password"
                                            autocomplete="new-password">
                                        <div class="text-danger" name="password"><small><ul></ul></small></div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="password_confirmation"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="password_confirmation" type="password" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>
    
                            </div> <!-- fin columna 1-->
    
                            <div class="col-md-6 col-sm-12 col-xs-12">
    
                                <div class="form-group row">
                                    <label for="cargo"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="cargo" type="text"
                                            class="form-control" name="cargo"
                                            value="{{ old('cargo') }}" required autocomplete="cargo" autofocus>
                                        <div class="text-danger" name="cargo"><small><ul></ul></small></div>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="fin_contrato_fecha"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Fecha Final del contrato') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="fin_contrato_fecha" type="date"
                                            class="form-control" name="fin_contrato_fecha"
                                            value="{{ old('fin_contrato_fecha') }}" required autocomplete="fin_contrato_fecha">
                                        <div class="text-danger" name="fin_contrato_fecha"><small><ul></ul></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fin_contrato_hora"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Hora Final del contrato') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="fin_contrato_hora" type="time"
                                            class="form-control" name="fin_contrato_hora"
                                            value="{{ old('fin_contrato_hora') }}" required autocomplete="fin_contrato_hora">

                                            <div class="text-danger" name="fin_contrato_hora"><small><ul></ul></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rol"
                                        class="col-md-4 col-form-label text-md-right">Role de Usuario</label>
    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select id="roles" class="form-control" name="rol" required>
                                                <option value="">Selecione...</option>
                                                @foreach ($roles as $rol)
                                                    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
    
                                        <div class="text-danger" name="rol"><small><ul></ul></small></div>
                                    </div>
    
                                </div>
                            <div class="botones-pies">
    
                                <button id="submit" type="submit" class="btn btn-secondary">Guardar</button>
                                <button id="limpiar" type="reset" class="btn btn-secondary">Limpiar</button>
    
                            </div>
                        </div>
    
                    </div>
    
                </form>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
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
                            <td>{{ $user->rol_name }}</td>
                            <td>{{ $user->fin_contrato }}</td>
                            <td>{{ $user->estado==1?'Activado':'Desactivado' }}</td>
                            <td>
                                <button onclick="etidarUsuario({{ $user }});" class="btn btn-sm btn-default">
                                    Editar
                                </button>
                                <button type="button" onclick="cambiarEstadoUsuario({{ $user->id }})" class="btn btn-sm btn-danger">
                                    Cambiar Estado
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->render() }}
            </div>
        </div>
    </div>
</div>

<div id="ConfirmAction" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Confirmar Acción</h5>
            </div>
            <div class="modal-body">
                <p>¿Esta seguro que desea realizar esta acción?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnConfirmar">Confirmar</button>
            </div>
        </div>
    </div>
</div>

<script>
    let idUsuario = 0;
    let modalConfirm = $('#ConfirmAction');
    let formUsuario = $('#Usuario');

    $(document).ready(() => {

        $('#limpiar').click(function () { 
            estadoInicialForm(); 
        });

        formUsuario.on('submit', (event)=> {
            event.preventDefault();
            modalConfirm.modal('show');
        });

        
        $('#btnConfirmar').click((e) => { 
            e.preventDefault();
            $.ajax({
                url: "{{ route('Ingresar_Usuarios.create') }}",
                type: 'POST',
                dataType: 'json',
                data: formUsuario.serialize()
            })
            .done(function (data) {
                if (data.validate == true) {
                    modalConfirm.modal('hide');
                    makeNotification(data.message, 'success');
                    setTimeout(() => {
                        location.href = location.href;
                    }, 2000);
                } else {
                    clearMessage();
                    validateFalse(data.errors);
                    modalConfirm.modal('hide');
                }
            })
            .fail(function (data) {
                makeNotification('No se pudo registrar el usuario.', 'error');
                modalConfirm.modal('hide');
            });
        });

    });

    function cambiarEstadoUsuario(id) {
        Swal.fire({
            title: '¿Está seguro?',
            text: 'Seguro deseas cambiar el estado de este usuario.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Seguro'
        }).then((result) => {
            if(result.value){
                $.ajax({
                    url: `users/${id}`,
                    type: 'DELETE',
                    dataType: 'json',
                })
                .done(function (data) {
                    if (data.validate == true) {
                        modalConfirm.modal('hide');
                        makeNotification(data.message, 'success');
                        setTimeout(() => {
                            location.href = location.href;
                        }, 2000);
                    }
                })
                .fail(function (data) {
                    makeNotification('No se pudo cambiar el estado del usuario', 'error');
                });
            }
        });
    }

    function makeNotification(message = 'Sin mensaje', type = 'info'){
        //Cambiar esto por swl
        Swal.fire(
            'Notificación',
            message,
            type
        );
    }

    function clearMessage() {
        $('div[name=nombres] small ul').empty();
        $('div[name=apellidos] small ul').empty();
        $('div[name=cargo] small ul').empty();
        $('div[name=documento] small ul').empty();
        $('div[name=fin_contrato_fecha] small ul').empty();
        $('div[name=fin_contrato_hora] small ul').empty();
        $('div[name=email] small ul').empty();
        $('div[name=rol] small ul').empty();
        $('div[name=password] small ul').empty();
        $('div[name=password_confirmation] small ul').empty();
    }

    function validateFalse(array) {
        $.each(array, function (input, errors) {
            errors.forEach(element => {
                $('div[name="' + input + '"] small ul').append('<li>' + element.replace(' edit', '') + '</li>');
            });
        });
    }

    
    function etidarUsuario(usuario){
        estadoInicialForm();
        $("#id_usuario").val(usuario.id);
        idUsuario = usuario.id;
        formUsuario[0].reset();
        $('#nombres').val(usuario.name);
        $('#apellidos').val(usuario.apellidos);
        $('#cargo').val(usuario.cargo);
        $('#documento').val(usuario.cedula);
        $('#fin_contrato_fecha').val(usuario.fin_contrato.substring(0, 10));
        $('#fin_contrato_hora').val(usuario.fin_contrato.substring(11,16));
        $('#email').val(usuario.email);
        $('#roles option').attr('selected', false);
        $('#roles').val(usuario.id_rol);
        $('#submit').text("Actualizar");        

        $('html, body').animate({scrollTop:200}, 'slow');
        
    }

    function estadoInicialForm() {
        formUsuario[0].reset();
        $('#submit').text("Guardar");
        $("#id_usuario").val(0);
        clearMessage();
    }

</script>



@endsection