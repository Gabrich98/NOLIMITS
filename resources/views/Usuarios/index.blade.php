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



    
  <h2>USUARIOS</h2>           
  <table class="table table-condensed">
    <thead>
      <tr>
    
        <th>Nombre</th>
      
        <th>E-Mail</th>
          <th>Rol</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->name}}</td>
             
                 <td>{{$usuario->email}}</td>
            
             
                <td>{{$usuario->role}}</td>
                <td><a href="{{ route('usuario.edit',$usuario->id) }}" class="btn btn-success">Editar</a>
                  <form style="display:inline" method="POST" action="{{ route('usuario.destroy',$usuario->id) }} ">
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
  

</body>

</div>
@endsection
