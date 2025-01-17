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
        <!-- ------------------------------------------------------------------------------------------------------- Lista columna izquierda -->
        <div class="col-md-4">
          <!-- contendor para paginación --------------------------------------------------------------------------------------------------- -->
          <ol id="customPagination">
            <li data-bs-target="#ryu" data-bs-slide-to="0">Ryu</li>
            <li data-bs-target="#feilong" data-bs-slide-to="0">Fei Long</li>
            <li data-bs-target="#chunli" data-bs-slide-to="0">Chun Li</li>
            <li data-bs-target="#ken" data-bs-slide-to="0">Ken</li>
            <li data-bs-target="#dhalsim" data-bs-slide-to="0">M. Bison</li>
            <li data-bs-target="#mbison" data-bs-slide-to="0">Dhalsim</li>
            <li data-bs-target="#guile" data-bs-slide-to="0">Guile</li>
            <li data-bs-target="#deejay" data-bs-slide-to="0">Dee Jay</li>
            <li data-bs-target="#cammy" data-bs-slide-to="0">Cammy</li>
            <li data-bs-target="#sagat" data-bs-slide-to="0">Sagat</li>
            <li data-bs-target="#vega" data-bs-slide-to="0">Vega</li>
            <li data-bs-target="#blanka" data-bs-slide-to="0">Blanka</li>
            <li data-bs-target="#thawk" data-bs-slide-to="0">T. Hawk</li>
            <li data-bs-target="#balrog" data-bs-slide-to="0">Balrog</li>
            <li data-bs-target="#ehonda" data-bs-slide-to="0">E. Honda</li>
            <li data-bs-target="#akuma" data-bs-slide-to="0">Akuma</li>
            <li data-bs-target="#zangief" data-bs-slide-to="0">Zangief</li>
          </ol>
        </div> <!-- contenedor de la lista / paginación -->
        <!-- ----------------------------------------------------- Columna de carrusel ----------------------------------------------------- -->        
        <div class="col-md-8">
          <!-- ---------------------------------------------------------- Wave  1 ---------------------------------------------------------- -->
          <div id="ryu" class="carousel slide" data-bs-interval="false"> <!-- ---------------------------------------------------------- RYU -->
            <h4>Ryu</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/ryu1.jpg" class="glightbox">
                <img src="assets/img/personajes/ryu1.jpg" class="character-img img-fluid" alt="Ryu Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/ryu2.jpg" class="glightbox">
                <img src="assets/img/personajes/ryu2.jpg" class="character-img img-fluid" alt="Ryu Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/ryu3.jpg" class="glightbox">
                <img src="assets/img/personajes/ryu3.jpg" class="character-img img-fluid" alt="Ryu con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/ryu4.jpg" class="glightbox">
                <img src="assets/img/personajes/ryu4.jpg" class="character-img img-fluid" alt="Ryu pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#ryu" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ryu" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="feilong" class="carousel slide" data-bs-interval="false">  <!-- ------------------------------------------------ FEI LONG -->
            <h4>Fei Long</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/feilong1.jpg" class="glightbox">
                <img src="assets/img/personajes/feilong1.jpg" class="character-img img-fluid" alt="Fei Long Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/feilong2.jpg" class="glightbox">
                <img src="assets/img/personajes/feilong2.jpg" class="character-img img-fluid" alt="Fei Long Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/feilong3.jpg" class="glightbox">
                <img src="assets/img/personajes/feilong3.jpg" class="character-img img-fluid" alt="Fei Long con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/feilong4.jpg" class="glightbox">
                <img src="assets/img/personajes/feilong4.jpg" class="character-img img-fluid" alt="Fei Long pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#feilong" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#feilong" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="chunli" class="carousel slide" data-bs-interval="false"> <!-- --------------------------------------------------- CHUN LI -->
            <h4>Chun Li</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/chunli1.jpg" class="glightbox">
                <img src="assets/img/personajes/chunli1.jpg" class="character-img img-fluid" alt="Chun Li Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/chunli2.jpg" class="glightbox">
                <img src="assets/img/personajes/chunli2.jpg" class="character-img img-fluid" alt="Chun Li Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/chunli3.jpg" class="glightbox">
                <img src="assets/img/personajes/chunli3.jpg" class="character-img img-fluid" alt="Chun Li con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/chunli4.jpg" class="glightbox">
                <img src="assets/img/personajes/chunli4.jpg" class="character-img img-fluid" alt="Chun Li pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#chunli" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#chunli" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <!-- ---------------------------------------------------------- Wave  2 ---------------------------------------------------------- -->
          <div id="ken" class="carousel slide" dta-bs-interval="false"> <!-- ----------------------------------------------------------- KEN -->
            <h4>Ken</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/ken1.jpg" class="glightbox">
                <img src="assets/img/personajes/ken1.jpg" class="character-img img-fluid" alt="Ken Frontal"> </a>
              </div> </div> </div> 
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/ken2.jpg" class="glightbox">
                <img src="assets/img/personajes/ken2.jpg" class="character-img img-fluid" alt="Ken Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/ken3.jpg" class="glightbox">
                <img src="assets/img/personajes/ken3.jpg" class="character-img img-fluid" alt="Ken con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/ken4.jpg" class="glightbox">
                <img src="assets/img/personajes/ken4.jpg" class="character-img img-fluid" alt="Ken pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#ken" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ken" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="dhalsim" class="carousel slide" data-bs-interval="false"> <!-- -------------------------------------------------- DHALSIM -->
            <h4>Dhalsim</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/dhalsim1.jpg" class="glightbox">
                <img src="assets/img/personajes/dhalsim1.jpg" class="character-img img-fluid" alt="Dhalsim Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/dhalsim2.jpg" class="glightbox">
                <img src="assets/img/personajes/dhalsim2.jpg" class="character-img img-fluid" alt="Dhalsim Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/dhalsim3.jpg" class="glightbox">
                <img src="assets/img/personajes/dhalsim3.jpg" class="character-img img-fluid" alt="Dhalsim con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/dhalsim4.jpg" class="glightbox">
                <img src="assets/img/personajes/dhalsim4.jpg" class="character-img img-fluid" alt="Dhalsim pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#dhalsim" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#dhalsim" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="mbison" class="carousel slide" data-bs-interval="false"> <!-- --------------------------------------------------- M BISON -->
            <h4>M. Bison</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/mbison1.jpg" class="glightbox">
                <img src="assets/img/personajes/mbison1.jpg" class="character-img img-fluid" alt="M. Bison Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">      
                <a href="assets/img/personajes/mbison2.jpg" class="glightbox">
                <img src="assets/img/personajes/mbison2.jpg" class="character-img img-fluid" alt="M. Bison Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/mbison3.jpg" class="glightbox">
                <img src="assets/img/personajes/mbison3.jpg" class="character-img img-fluid" alt="M. Bison con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/mbison4.jpg" class="glightbox">
                <img src="assets/img/personajes/mbison4.jpg" class="character-img img-fluid" alt="M. Bison pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mbison" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mbison" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <!-- ---------------------------------------------------------- Wave  3 ---------------------------------------------------------- -->
          <div id="guile" class="carousel slide" data-bs-interval="false"> <!-- ------------------------------------------------------ GUILE -->
            <h4>Guile</h4>
            <div class="carousel-inner">
              <div class="carousel-item ative"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/guile1.jpg" class="glightbox">
                <img src="assets/img/personajes/guile1.jpg" class="character-img img-fluid" alt="Guile Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/guile2.jpg" class="glightbox">
                <img src="assets/img/personajes/guile2.jpg" class="character-img img-fluid" alt="Guile Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/guile3.jpg" class="glightbox">
                <img src="assets/img/personajes/guile3.jpg" class="character-img img-fluid" alt="Guile con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/guile4.jpg" class="glightbox">
                <img src="assets/img/personajes/guile4.jpg" class="character-img img-fluid" alt="Guile pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#guile" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#guile" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="deejay" class="carousel slide" data-bs-interval="false"> <!-- --------------------------------------------------- DEE JAY -->
            <h4>Dee Jay</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/deejay1.jpg" class="glightbox">
                <img src="assets/img/personajes/deejay1.jpg" class="character-img img-fluid" alt="Dee Jay Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/deejay2.jpg" class="glightbox">
                <img src="assets/img/personajes/deejay2.jpg" class="character-img img-fluid" alt="Dee Jay Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/deejay3.jpg" class="glightbox">
                <img src="assets/img/personajes/deejay3.jpg" class="character-img img-fluid" alt="Dee Jay con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/deejay4.jpg" class="glightbox">
                <img src="assets/img/personajes/deejay4.jpg" class="character-img img-fluid" alt="Dee Jay pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#deejay" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#deejay" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="cammy" class="carousel slide" data-bs-interval="false"> <!-- ------------------------------------------------------ CAMMY -->
            <h4>Cammy</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/cammy1.jpg" class="glightbox">
                <img src="assets/img/personajes/cammy1.jpg" class="character-img img-fluid" alt="Cammy Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/cammy2.jpg" class="glightbox">
                <img src="assets/img/personajes/cammy2.jpg" class="character-img img-fluid" alt="Cammy Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/cammy3.jpg" class="glightbox">
                <img src="assets/img/personajes/cammy3.jpg" class="character-img img-fluid" alt="Cammy con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/cammy4.jpg" class="glightbox">
                <img src="assets/img/personajes/cammy4.jpg" class="character-img img-fluid" alt="Cammy pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#cammy" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cammy" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <!-- ---------------------------------------------------------- Wave  4 ---------------------------------------------------------- -->
          <!-- ---------------------------------------------------------- Wave  5 ---------------------------------------------------------- -->
        </div>
      </div>
    </div>
  </div>
@endsection