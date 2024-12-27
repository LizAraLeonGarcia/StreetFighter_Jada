@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes de las wave</h3>
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
                  <h4>Ryu</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/ryu1.jpg" class="glightbox">
                      <img src="assets/img/personajes/ryu1.jpg" class="character-img img-fluid" alt="Ryu Frontal">
                      <img src="assets/img/personajes/ryu2.jpg" class="character-img img-fluid" alt="Ryu Lateral">
                      <img src="assets/img/personajes/ryu3.jpg" class="character-img img-fluid" alt="Ryu con efecto">
                      <img src="assets/img/personajes/ryu4.jpg" class="character-img img-fluid" alt="Ryu pose">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Fei Long</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/feilong1.jpg" class="glightbox">
                      <img src="assets/img/personajes/feilong1.jpg" class="character-img img-fluid" alt="Fei Long Frontal">
                      <img src="assets/img/personajes/feilong2.jpg" class="character-img img-fluid" alt="Fei Long Lateral">
                      <img src="assets/img/personajes/feilong3.jpg" class="character-img img-fluid" alt="Fei Long con efecto">
                      <img src="assets/img/personajes/feilong4.jpg" class="character-img img-fluid" alt="Fei Long pose">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Chun Li</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/chunli1.jpg" class="glightbox">
                      <img src="assets/img/personajes/chunli1.jpg" class="character-img img-fluid" alt="Chun Li Frontal">
                      <img src="assets/img/personajes/chunli2.jpg" class="character-img img-fluid" alt="Chun Li Lateral">
                      <img src="assets/img/personajes/chunli3.jpg" class="character-img img-fluid" alt="Chun Li con efecto">
                      <img src="assets/img/personajes/chunli4.jpg" class="character-img img-fluid" alt="Chun Li pose">
                    </a>
                  </div>
                </div>
              </div>
              <!-- ------------------------------------------------------- wave 2 ------------------------------------------------------- -->
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Ken</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/ken1.jpg" class="glightbox">
                      <img src="assets/img/personajes/ken1.jpg" class="character-img img-fluid" alt="Ken Frontal">
                      <img src="assets/img/personajes/ken2.jpg" class="character-img img-fluid" alt="Ken Lateral">
                      <img src="assets/img/personajes/ken3.jpg" class="character-img img-fluid" alt="Ken con efecto">
                      <img src="assets/img/personajes/ken4.jpg" class="character-img img-fluid" alt="Ken pose">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>M. Bison</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/mbison1.jpg" class="glightbox">
                      <img src="assets/img/personajes/mbison1.jpg" class="character-img img-fluid" alt="M. Bison Frontal">
                      <img src="assets/img/personajes/mbison2.jpg" class="character-img img-fluid" alt="M. Bison Lateral">
                      <img src="assets/img/personajes/mbison3.jpg" class="character-img img-fluid" alt="M. Bison con efecto">
                      <img src="assets/img/personajes/mbison4.jpg" class="character-img img-fluid" alt="M. Bison pose">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Dhalsim</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/dhalsim1.jpg" class="glightbox">
                      <img src="assets/img/personajes/dhalsim1.jpg" class="character-img img-fluid" alt="Dhalsim Frontal">
                      <img src="assets/img/personajes/dhalsim2.jpg" class="character-img img-fluid" alt="Dhalsim Lateral">
                      <img src="assets/img/personajes/dhalsim3.jpg" class="character-img img-fluid" alt="Dhalsim con efecto">
                      <img src="assets/img/personajes/dhalsim4.jpg" class="character-img img-fluid" alt="Dhalsim pose">
                    </a>
                  </div>
                </div>
              </div>
              <!-- ------------------------------------------------------- wave 3 ------------------------------------------------------- -->
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Guile</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/guile1.jpg" class="glightbox">
                      <img src="assets/img/personajes/guile1.jpg" class="character-img img-fluid" alt="Guile Frontal">
                      <img src="assets/img/personajes/guile2.jpg" class="character-img img-fluid" alt="Guile Lateral">
                      <img src="assets/img/personajes/guile3.jpg" class="character-img img-fluid" alt="Guile con efecto">
                      <img src="assets/img/personajes/guile4.jpg" class="character-img img-fluid" alt="Guile pose">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Dee Jay</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/deejay1.jpg" class="glightbox">
                      <img src="assets/img/personajes/deejay1.jpg" class="character-img img-fluid" alt="Dee Jay Frontal">
                      <img src="assets/img/personajes/deejay2.jpg" class="character-img img-fluid" alt="Dee Jay Lateral">
                      <img src="assets/img/personajes/deejay3.jpg" class="character-img img-fluid" alt="Dee Jay con efecto">
                      <img src="assets/img/personajes/deejay4.jpg" class="character-img img-fluid" alt="Dee Jay pose">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Cammy</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/cammy1.jpg" class="glightbox">
                      <img src="assets/img/personajes/cammy1.jpg" class="character-img img-fluid" alt="Cammy Frontal">
                      <img src="assets/img/personajes/cammy2.jpg" class="character-img img-fluid" alt="Cammy Lateral">
                      <img src="assets/img/personajes/cammy3.jpg" class="character-img img-fluid" alt="Cammy con efecto">
                      <img src="assets/img/personajes/cammy4.jpg" class="character-img img-fluid" alt="Cammy pose">
                    </a>
                  </div>
                </div>
              </div>
              <!-- ------------------------------------------------------- wave 4 ------------------------------------------------------- -->
              <div class="carousel-item"> 
                <div class="character-item">
                  <h4>Vega</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/vega1.jpg" class="glightbox">
                      <img src="assets/img/personajes/vega1.jpg" class="character-img img-fluid" alt="Vega Frontal">
                      <img src="assets/img/personajes/vega2.jpg" class="character-img img-fluid" alt="Vega Lateral">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Sagat</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/sagat1.jpg" class="glightbox">
                      <img src="assets/img/personajes/sagat1.jpg" class="character-img img-fluid" alt="Sagat Frontal">
                      <img src="assets/img/personajes/sagat2.jpg" class="character-img img-fluid" alt="Sagat Lateral">
                    </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="character-item">
                  <h4>Blanka</h4>
                  <div class="character-images">
                    <a href="assets/img/personajes/blanka1.jpg" class="glightbox">
                      <img src="assets/img/personajes/blanka1.jpg" class="character-img img-fluid" alt="Blanka Frontal">
                      <img src="assets/img/personajes/blanka2.jpg" class="character-img img-fluid" alt="Blanka Lateral">
                    </a>
                  </div>
                </div>
              </div>
              <!-- ------------------------------------------------------- wave 5 ------------------------------------------------------- -->
              
            </div>
          </div>
        </div>
        <!-- --------------------------------------------------- Lista columna izquierda --------------------------------------------------- -->
        <div class="col-md-12">
          <!-- ------------------------------------------------- contendor para paginación ------------------------------------------------- -->
          <ol id="customPagination">
            <li data-bs-target="#characterCarousel" data-bs-slide-to="0">Ryu</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="1">Fei Long</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="2">Chun Li</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="3">Ken</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="4">M. Bison</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="5">Dhalsim</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="6">Guile</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="7">Dee Jay</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="8">Cammy</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="9">Vega</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="10">Sagat</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="11">Blanka</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="12">T. Hawk</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="13">Balrog</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="14">E. Honda</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="15">Akuma</li>
            <li data-bs-target="#characterCarousel" data-bs-slide-to="16">Zangief</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection