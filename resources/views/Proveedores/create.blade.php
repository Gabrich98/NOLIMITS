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
    <div class="panel-heading">Registro</div>
    <div class="panel-body">
  
 		{!! Form::open( array('route'=>'proveedor.store')) !!}
 		{{csrf_field()}}
 		{!! Field::text('razon social') !!}
     	{!! Field::text('nombre') !!}
     	{!! Field::text('apellido') !!}
     	{!! Field::email('email','ejemplo@ejemplo.com') !!}
     	{!! Field::text('localidad') !!}
     	{!! Field::text('direccion') !!}
     	{!! Field::number('telefono') !!}
     	{!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>
 	</div>
    </div>
 	</div>
    </div>
	
	</body>
@endsection