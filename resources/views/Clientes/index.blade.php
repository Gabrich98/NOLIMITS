@extends('layouts.app')

@section('content')

<body>
  <div class="container">



    
  <h2>CLIENTES</h2> 
  <form class="form-inline my-2 my-lg-0" role="search" action="{{ url('cliente/searchredirect') }} ">
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Ingrese el nombre">
      <button  class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>          
  <table class="table table-condensed">
    <thead>
      <tr>
  
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Localidad</th>
        <th>Domicilio</th>
        <th>Telefono</th>
        <th>ACCIONES</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            <tr>
            
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->localidad}}</td>
                <td>{{$cliente->domicilio}}</td>
                <td>{{$cliente->telefono}}</td>
                <td><a href="{{ route('cliente.edit',$cliente->id) }}" class="btn btn-success">Editar</a>
                  <form style="display:inline" method="POST" action="{{ route('cliente.destroy',$cliente->id) }} ">
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
  <a href="{{ route('cliente.create') }}" class="btn btn-primary btn-lg btn-block">Añadir Cliente</a>

</body>

</div>
@endsection
