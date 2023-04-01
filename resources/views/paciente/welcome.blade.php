<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Hospital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styleboton.css') }}">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('plantillas/assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between justify-content-md-between justify-content-center">
      <div class="align-items-center d-none d-md-flex text-center">
      </div>
    </div>
  </div>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <p> Proyect 2 CRUD</p>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Iniciar sesión</a></li>
          <li><a class="nav-link scrollto" href="{{ route('register') }}">Registrarse</a></li>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Bienvenido a tu Centro Medico Del Valle 
            Horario de atencion
            Lunes a Sabado De 8:00 AM a 9:00 PM</h2>
        </div>
      </div>
    </section>
    <section class="inner-page">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>
              Necesitas iniciar sesion para que puedas utilizar este servicio. Si no estas registrado porfavor hay que registrarse, con el podras Registrar pacientes, Eliminar registro de pacientes, si hubo algun error al registrar al paciente podras editarlo, tambien podras buscar un paciente en especifico en el registro y podras consultarlo las veces que tu quieras.
            </h3>
          </div>
          <div class="col-md-6">
            <img src="{{ asset('images/doctor.jpg') }}" alt="Imagen del hospital" class="img-fluid w-100">
          </div>
        </div>
      </div>
    </section>  
    <script src="{{ asset('assets/js/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>