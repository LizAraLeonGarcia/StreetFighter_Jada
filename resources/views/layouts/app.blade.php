<!DOCTYPE html>
<html lang="es">
<!-- --------------------------------------------------------------- HEADER --------------------------------------------------------------- -->
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Videojuego clásico de lucha: Street Fighter. Descubre personajes del mejor juego de lucha de la historia.">
  <meta name="keywords" content="Street Fighter, juego, lucha, personajes, videojuego, clásico">
  <meta name="author" content="Lizbeth Araceli León García">
  <title>Street Fighter</title>
  <!-- ----------------------------------------------------------------------------------------------------------------- cargar archivos CSS -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">                                                            <!-- Sección general -->
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">                                        <!-- Sección de la barra de navegación -->
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet">                                                       <!-- Sección del footer -->
  <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">                                                        <!-- Sección de inicio -->
  <link href="{{ asset('css/personajes.css') }}" rel="stylesheet">                                            <!-- Sección de los personajes -->
  <link href="{{ asset('css/especiales.css') }}" rel="stylesheet">                                            <!-- Sección de los especiales -->
  <link href="{{ asset('css/variantes.css') }}" rel="stylesheet">                                              <!-- Sección de las variantes -->
  <link href="{{ asset('css/galeria.css') }}" rel="stylesheet">                                                   <!-- Sección de la galería -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> 
</head>
<!-- ---------------------------------------------------------------- BODY ---------------------------------------------------------------- -->
<body>
  <!-- -------------------------------------------------------- header de la pagina -------------------------------------------------------- -->
  <header id="header" class="header">
    <div>
      @include('partials.navbar')
    </div>
  </header>
  <!-- ------------------------------------------------ contenido de las vistas específicas ------------------------------------------------ -->
  @yield('content')
  <!-- -------------------------------------------------------- footer de la página -------------------------------------------------------- -->
  @include('partials.footer')
  <!-- ---------------------------------------------------------------------------------------------------------------------- cargar scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>        
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/navbar.js') }}"></script>                                                               <!-- Barra de navegación -->
  <script src="{{ asset('js/personajes.js') }}"></script>                                                     <!-- Sección de los personajes -->
  <script src="{{ asset('js/especiales.js') }}"></script>                                                     <!-- Sección de los especiales -->
  <script src="{{ asset('js/variantes.js') }}"></script>                                                       <!-- Sección de las variantes -->
  <script src="{{ asset('js/galeria.js') }}"></script>                                                            <!-- Sección de la galería -->
</body>
</html>