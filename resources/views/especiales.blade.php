@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes exclusivos de la SDCC</h3>
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
                    <a href="assets/img/especiales/evilryu1.jpg" class="glightbox">
                      <img src="assets/img/especiales/evilryu1.jpg" class="character-img img-fluid" alt="Ryu frontal">
                      <img src="assets/img/especiales/evilryu2.jpg" class="character-img img-fluid" alt="Ryu trasera">
                      <img src="assets/img/especiales/evilryu3.jpg" class="character-img img-fluid" alt="Ryu dentro">
                      <img src="assets/img/especiales/evilryu4.jpg" class="character-img img-fluid" alt="Ryu efecto 1">
                      <img src="assets/img/especiales/evilryu5.jpg" class="character-img img-fluid" alt="Ryu efecto 2">
                      <img src="assets/img/especiales/evilryu6.jpg" class="character-img img-fluid" alt="Ryu pose 1">
                      <img src="assets/img/especiales/evilryu7.jpg" class="character-img img-fluid" alt="Ryu pose 2">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Violent Ken</h4>
                  <div class="character-images">
                    <a href="assets/img/especiales/violentken1.jpg" class="glightbox">
                      <img src="assets/img/especiales/violentken1.jpg" class="character-img img-fluid" alt="Violent Ken frontal">
                      <img src="assets/img/especiales/violentken2.jpg" class="character-img img-fluid" alt="Violent Ken trasera">
                      <img src="assets/img/especiales/violentken3.jpg" class="character-img img-fluid" alt="Violent Ken dentro">
                      <img src="assets/img/especiales/violentken4.jpg" class="character-img img-fluid" alt="Violent Ken efecto 1">
                      <img src="assets/img/especiales/violentken5.jpg" class="character-img img-fluid" alt="Violent Ken efecto 2">
                      <img src="assets/img/especiales/violentken6.jpg" class="character-img img-fluid" alt="Violent Ken pose 1">
                      <img src="assets/img/especiales/violentken7.jpg" class="character-img img-fluid" alt="Violent Ken pose 2">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Chun Li Player 2</h4>
                  <div class="character-images">
                    <a href="assets/img/especiales/chunlirosa1.jpg" class="glightbox">
                      <img src="assets/img/especiales/chunlirosa1.jpg" class="character-img img-fluid" alt="Chun Li frontal">
                      <img src="assets/img/especiales/chunlirosa2.jpg" class="character-img img-fluid" alt="Chun Li trasera">
                      <img src="assets/img/especiales/chunlirosa3.jpg" class="character-img img-fluid" alt="Chun Li dentro">
                      <img src="assets/img/especiales/chunlirosa4.jpg" class="character-img img-fluid" alt="Chun Li efecto 1">
                      <img src="assets/img/especiales/chunlirosa5.jpg" class="character-img img-fluid" alt="Chun Li efecto 2">
                      <img src="assets/img/especiales/chunlirosa6.jpg" class="character-img img-fluid" alt="Chun Li pose 1">
                      <img src="assets/img/especiales/chunlirosa7.jpg" class="character-img img-fluid" alt="Chun Li pose 2">
                    </a>
                  </div>
                </div>
              </div>
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