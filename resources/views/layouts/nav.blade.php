<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>


  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      @guest
      @else
      <a class="navbar-brand" href="/">NO LIMITS</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home">Inicio</a></li>
        <li><a href="/proveedor">Proveedores</a></li>
     {{--    <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li> --}}
      </ul>
      @endguest
      <ul class="nav navbar-nav navbar-right">
      	@guest

          <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
          <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
      	@else
     					<div class="dropdown">
              <button class="btn btn-primary btn-lg" type="button" data-toggle="dropdown">{{ Auth::user()->name }} 
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
              </div>
              </div>
        @endguest 
     </ul>
    </div>
  </div>
</nav>
  
<div class="container">
 
</div>

</body>
</html>
