<!DOCTYPE html>
<html lang="es">
<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') - Nuevo paciente</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('css/styleboton.css') }}">
</head>
<body class="wratter">
  <div class="container-fluid shadow bg-white">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="wrapper">
          <h1>Mi proyecto</h1>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="d-flex justify-content-end align-items-center">
          @auth
            <span class="session">{{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="session">Cerrar sesión</button>

            </form>
          @endauth
        </div>
        <div class="d-flex justify-content-end">
          <a href="{{ route('paciente.create') }}" class="wrapper">Nuevo paciente</a>
          <a href="{{ route('paciente.index') }}" class="wrapper">Ver consultas</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        @yield('contenido')
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
