@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes con variación de color</h3>
    </div>
    <!-- ---------------------------------------------------- contenedor para personaje ---------------------------------------------------- -->
    <div class="personajes">
      <div class="row">
        <!-- ----------------------------------------------------- Columna de carrusel ----------------------------------------------------- -->        
        <div class="col-md-12">
          <div id="characterCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
            <div class="carousel-inner">
              <!-- ------------------------------------------------------- wave 1 ------------------------------------------------------- -->
              <div class="carousel-item active">
                <div class="character-item">
                  <h4>Ryu Player 2</h4>
                  <div class="character-images">
                    <a href="assets/img/variantes/ryugris1.jpg" class="glightbox">
                      <img src="assets/img/variantes/ryugris1.jpg" class="character-img img-fluid" alt="Ryu Player 2">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Ken Player 2</h4>
                  <div class="character-images">
                    <a href="assets/img/variantes/kenblanco1.jpg" class="glightbox">
                      <img src="assets/img/variantes/kenblanco1.jpg" class="character-img img-fluid" alt="Ken Player 2">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Chun Li Roja</h4>
                  <div class="character-images">
                    <a href="assets/img/variantes/chunliroja1.jpg" class="glightbox">
                      <img src="assets/img/variantes/chunliroja1.jpg" class="character-img img-fluid" alt="Chun Li Roja">
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
            <li data-bs-target="#characterCarousel" data-bs-slide-to="0">Ryu Player 2</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="1">Ken Player 2</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="2">Chun Li Roja</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="3">Fei Long Player 2</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="4">M. Bison Player 2</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection