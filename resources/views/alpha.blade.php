@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Serie Alpha</h3>
    </div>
    <!-- ---------------------------------------------------- contenedor para personaje ---------------------------------------------------- -->
    <div class="alpha">
      <div class="row">
        <!-- ------------------------------------------------------------------------------------------------------- Lista columna izquierda -->
        <div class="col-md-4">
          <!-- contendor para paginación --------------------------------------------------------------------------------------------------- -->
          <ol id="customPagination">
            <li class="char chunli-alpha" data-bs-target="#chunli-alpha" data-bs-slide-to="0">Chun Li</li>
            <li class="char ryu-alpha" data-bs-target="#ryu-alpha" data-bs-slide-to="0">Ryu</li>
            <li class="char charlie-alpha" data-bs-target="#charlie-alpha" data-bs-slide-to="0">Charlie</li>
          </ol>
        </div> <!-- contenedor de la lista / paginación -->
        <!-- ----------------------------------------------------- Columna del carrusel ----------------------------------------------------- --> 
        <div class="col-md-8">       
          <div id="chunli-alpha" class="carousel slide character-chunli-alpha" data-bs-interval="false"> <!-- ----------------------------------- CHUN LI -->
            <h4>Chun Li</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/alpha/3-1.jpg">
                <img src="assets/img/alpha/3-1.jpg" class="character-imagen" alt="Chun Li Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/alpha/3-2.jpg">
                <img src="assets/img/alpha/3-2.jpg" class="character-imagen" alt="Chun Li Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/alpha/3-3.jpg">
                <img src="assets/img/alpha/3-3.jpg" class="character-imagen" alt="Chun Li con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/alpha/3-4.jpg">
                <img src="assets/img/alpha/3-4.jpg" class="character-imagen" alt="Chun Li pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#chunli-alpha" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#chunli-alpha" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="ryu-alpha" class="carousel slide character-ryu-alpha" data-bs-interval="false"> <!-- --------------------------------------- CAMMY -->
            <h4>Ryu</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/alpha/1-1.jpg">
                <img src="assets/img/alpha/1-1.jpg" class="character-imagen" alt="Cammy Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/alpha/1-2.jpg">
                <img src="assets/img/alpha/1-2.jpg" class="character-imagen" alt="Cammy Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/alpha/1-3.jpg">
                <img src="assets/img/alpha/1-3.jpg" class="character-imagen" alt="Cammy con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/alpha/1-4.jpg">
                <img src="assets/img/alpha/1-4.jpg" class="character-imagen" alt="Cammy pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#ryu-alpha" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ryu-alpha" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="charlie-alpha" class="carousel slide character-charlie-alpha" data-bs-interval="false"> <!-- ------------------------------------------ VEGA -->
            <h4>Charlie Nash</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/alpha/2-1.jpg">
                <img src="assets/img/alpha/2-1.jpg" class="character-imagen" alt="Vega Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/alpha/2-2.jpg">
                <img src="assets/img/alpha/2-2.jpg" class="character-imagen" alt="Vega Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/alpha/2-3.jpg">
                <img src="assets/img/alpha/2-3.jpg" class="character-imagen" alt="Vega con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/alpha/2-4.jpg">
                <img src="assets/img/alpha/2-4.jpg" class="character-imagen" alt="Vega pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#charlie-alpha" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#charlie-alpha" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>



        </div>
      </div>
    </div>
  </div>
@endsection