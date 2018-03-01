@extends('layouts.app')

@section('title')
Clientes
@endsection

@section('content')
	<body>	
	
	<div class="container">
    <div class="row">
    <div class="container col-md-4 col-md-offset-4">
 	<div class="panel panel-default">
    <div class="panel-heading">EDITAR CLIENTE</div>
    <div class="panel-body">
  
 		{!! Form::open(array('route' => array('cliente.update', $cliente->id)))!!}
 		{{csrf_field()}}
 		{{method_field('PUT')}}

     	{!! Field::text('nombre',$cliente->nombre) !!}
     	{!! Field::text('apellido',$cliente->apellido) !!}

     	{!! Field::text('localidad',$cliente->localidad) !!}
     	{!! Field::text('domicilio',$cliente->domicilio) !!}
     	{!! Field::number('telefono',$cliente->telefono) !!}
     	{!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>
 	</div>
    </div>
 	</div>
    </div>
	
	</body>
@endsection