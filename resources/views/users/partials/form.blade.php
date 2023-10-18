<div class="form-group">
	{{ Form::label('Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'style="width:300px"' ,'id' => 'name']) }}
	{{ Form::label('Apellido') }}
	{{ Form::text('apellidos', null, ['class' => 'form-control', 'style="width:300px"', 'id' => 'name']) }}
	{{ Form::label('N° Identificacion') }}
	{{ Form::text('cedula', null, ['class' => 'form-control', 'style="width:300px"' ,'id' => 'name']) }}
	{{ Form::label('Email') }}
	{{ Form::text('email', null, ['class' => 'form-control', 'style="width:300px"', 'id' => 'name']) }}

	{{ Form::label('Fecha Inicio Contrato') }}
	{{ Form::text('created_at', null, ['class' => 'form-control', 'style="width:300px"', 'id' => 'name']) }}
	{{ Form::label('Fecha Fin contrato') }}
	{{ Form::text('fin_contrato', null, ['class' => 'form-control', 'style="width:300px"', 'id' => 'name']) }}
</div>
<hr>
<h3>Permisos  del sistema</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $role)
	    <li>
	        <label>
	        {{ Form::checkbox('roles[]', $role->id, null) }}
	        {{ $role->name }}
	        <em>({{ $role->description }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	<a class="boton_personalizado" href="{{ url('Menu-Usuarios') }}">Cancelar</a>
</div>



<style> 
        .boton_personalizado{
        text-decoration: none;
          padding: 1px;
         font-weight: 600;
         font-size: 20px;
        color: #ffffff;
        background-color: #1883ba;
        border-radius: 6px;
        border: 2px solid #0016b0;
        margin-inline-start: 298px;
        }
    </style>