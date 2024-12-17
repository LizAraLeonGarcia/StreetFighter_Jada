@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes de SDCC</h3>
    </div>
    <!-- ---------------------------------------------------- contenedor para personaje ---------------------------------------------------- -->
    <div class="especiales">
      <div class="row">
        <!-- ----------------------------------------------------- Columna de carrusel ----------------------------------------------------- -->        
        <div class="col-md-12">
          <div id="characterCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
            <div class="carousel-inner">
              <!-- ------------------------------------------------------- wave 1 ------------------------------------------------------- -->
              <div class="carousel-item active">
                <div class="character-item">
                  <h4>Evil Ryu</h4>
                  <div class="character-images">
                    <a href="assets/img/especiales/ryu1.jpg" class="glightbox">
                      <img src="assets/img/especiales/evilryu1.jpg" class="character-img img-fluid" alt="Ryu Frontal">
                      <img src="assets/img/especiales/evilryu2.jpg" class="character-img img-fluid" alt="Ryu Lateral">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Violent Ken</h4>
                  <div class="character-images">
                    <a href="assets/img/especiales/feilong1.jpg" class="glightbox">
                      <img src="assets/img/especiales/feilong1.jpg" class="character-img img-fluid" alt="Fei Long Frontal">
                      <img src="assets/img/especiales/feilong2.jpg" class="character-img img-fluid" alt="Fei Long Lateral">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Chun Li Player 2</h4>
                  <div class="character-images">
                    <a href="assets/img/especiales/chunli1.jpg" class="glightbox">
                      <img src="assets/img/especiales/chunli1.jpg" class="character-img img-fluid" alt="Chun Li Frontal">
                      <img src="assets/img/especiales/chunli2.jpg" class="character-img img-fluid" alt="Chun Li Lateral">
                    </a>
                  </div>
                </div>
              </div>
        <!-- --------------------------------------------------- Lista columna izquierda --------------------------------------------------- -->
        <div class="col-md-12">
          <!-- ------------------------------------------------- contendor para paginación ------------------------------------------------- -->
          <ol id="customPagination">
            <li data-bs-target="#characterCarousel" data-bs-slide-to="0">Evil Ryu</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="1">Violent Ken</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="2">Chun Li Player 2</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection