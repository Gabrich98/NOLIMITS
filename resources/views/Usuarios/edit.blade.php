@extends('layouts.app')

@section('title')
	Proveedores
@endsection

@section('content')
	<body>	
	
	<div class="container">
    <div class="row">
    <div class="container col-md-4 col-md-offset-4">
 	<div class="panel panel-default">
    <div class="panel-heading">EDITAR USUARIO</div>
    <div class="panel-body">
  
 		{!! Form::open(array('route' => array('usuario.update', $usuario->id)))!!}
 		{{csrf_field()}}
 		{{method_field('PUT')}}
 		{!! Field::text('Nombre',$usuario->name) !!}
     	{!! Field::text('E-Mail',$usuario->email) !!}
     	  {!! Field::text('Pass',$usuario->password) !!}
     	{!! Field::text('Rol',$usuario->role) !!}
     	{!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>
 	</div>
    </div>
 	</div>
    </div>
	
	</body>
@endsection