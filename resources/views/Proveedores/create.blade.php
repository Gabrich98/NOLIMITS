@extends('layouts.app')

@section('content')

<title>PROVEEDORES</title>
											
	<h1>POVEEDOR</h1>

	<h2>Registrate</h2>
	<form method = "POST" action="{{ route('proveedor.store')}} ">
		{{-- 		{!!method_field('PUT')!!} --}}
		{{-- {{Csrf_field()}} --}}
			<p><label>	
			Razon Social 
			<input class="form-control" type="text" name="razon_social">
			{{$errors->first('razon_social')}}
		</label></p>

		<p><label>	
			Nombre 
			<input class="form-control" type="text" name="nombre">
			{{$errors->first('nombre')}}
		</label></p>
			Apellido 
			<input class="form-control" type="text" name="apellido">
			{{$errors->first('apellido')}}
		</label></p>
				 
		<p><label>
			Localidad
			<input class="form-control" type="text" name="localidad">
			{{$errors->first('localidad')}} 
		</label></p>

			Direccion
			<input class="form-control" type="text" name="direccion">
			{{$errors->first('localidad')}} 
		</label></p>

		<p><label>
			Telefono
			<input class="form-control" type="text" name="telefono">
		</label></p>
		
		<input class="btn btn-primary" type="submit" value="Enviar">

	</form>
	<hr>
@endsection