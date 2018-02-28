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
    <div class="panel-heading">EDITAR PROVEEDOR</div>
    <div class="panel-body">
  
 		{!! Form::open(array('route' => array('proveedor.update', $proveedor->id)))!!}
 		{{csrf_field()}}
 		{{method_field('PUT')}}
 		{!! Field::text('razon social',$proveedor->razon_social) !!}
     	{!! Field::text('nombre',$proveedor->nombre) !!}
     	{!! Field::text('apellido',$proveedor->apellido) !!}
     	{!! Field::email('email',$proveedor->email) !!}
     	{!! Field::text('localidad',$proveedor->localidad) !!}
     	{!! Field::text('direccion',$proveedor->direccion) !!}
     	{!! Field::number('telefono',$proveedor->telefono) !!}
     	{!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>
 	</div>
    </div>
 	</div>
    </div>
	
	</body>
@endsection