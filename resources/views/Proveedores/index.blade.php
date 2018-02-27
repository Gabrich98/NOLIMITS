@extends('layouts.app')

 {{--  <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> --}}

@section('content')

<body>
  <div class="container">



    
  <h2>PROVEEDORES</h2>           
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Razon Social</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>E-Mail</th>
        <th>Localidad</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>ACCIONES</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($proveedores as $proveedor)
            <tr>
                <td>{{$proveedor->razon_social}}</td>
                <td>{{$proveedor->nombre}}</td>
                <td>{{$proveedor->apellido}}</td>
                 <td>{{$proveedor->email}}</td>
                <td>{{$proveedor->localidad}}</td>
                <td>{{$proveedor->direccion}}</td>
                <td>{{$proveedor->telefono}}</td>
                <td><a href="{{ route('proveedor.edit',$proveedor->id) }}" class="btn btn-success">Editar</a>
                  <form style="display:inline" method="POST" action="{{ route('proveedor.destroy',$proveedor->id) }} ">
                    {!!csrf_field()!!}
                    {!!method_field('DELETE')!!}
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
                {{-- <a  method="POST" action="{{ route('proveedor.destroy',$proveedor->id) }} " class="btn btn-danger">
                
                  Elimin</a> --}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('proveedor.create') }}" class="btn btn-primary btn-lg btn-block">Añadir Contacto</a>

</body>

</div>
@endsection
