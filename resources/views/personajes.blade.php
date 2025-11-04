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
            <li data-bs-target="#dhalsim" data-bs-slide-to="0">Dhalsim</li>
            <li data-bs-target="#mbison" data-bs-slide-to="0">M. Bison</li>
            <li data-bs-target="#guile" data-bs-slide-to="0">Guile</li>
            <li data-bs-target="#cammy" data-bs-slide-to="0">Cammy</li>
            <li data-bs-target="#deejay" data-bs-slide-to="0">Dee Jay</li>
            <li data-bs-target="#sagat" data-bs-slide-to="0">Sagat</li>
            <li data-bs-target="#blanka" data-bs-slide-to="0">Blanka</li>
            <li data-bs-target="#vega" data-bs-slide-to="0">Vega</li>
            <li data-bs-target="#akuma" data-bs-slide-to="0">Akuma</li>
            <li data-bs-target="#ehonda" data-bs-slide-to="0">E. Honda</li>
            <li data-bs-target="#balrog" data-bs-slide-to="0">Balrog</li>

            <li data-bs-target="#thawk" data-bs-slide-to="0">T. Hawk</li>
            <li data-bs-target="#zangief" data-bs-slide-to="0">Zangief</li>
            <li data-bs-target="#¿?" data-bs-slide-to="0">¿ ?</li>
          </ol>
        </div> <!-- contenedor de la lista / paginación -->
        <!-- ----------------------------------------------------- Columna de carrusel ----------------------------------------------------- -->        
        <div class="col-md-8">
          <!-- ---------------------------------------------------------- Wave  1 ---------------------------------------------------------- -->
          <div id="ryu" class="carousel slide" data-bs-interval="false"> <!-- ---------------------------------------------------------- RYU -->
            <h4>Ryu</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/1-1.jpg" class="glightbox">
                <img src="assets/img/personajes/1-1.jpg" class="character-img" alt="Ryu Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/1-2.jpg" class="glightbox">
                <img src="assets/img/personajes/1-2.jpg" class="character-img" alt="Ryu Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/1-3.jpg" class="glightbox">
                <img src="assets/img/personajes/1-3.jpg" class="character-img" alt="Ryu con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/1-4.jpg" class="glightbox">
                <img src="assets/img/personajes/1-4.jpg" class="character-img" alt="Ryu pose"> </a>
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
                <a href="assets/img/personajes/2-1.jpg" class="glightbox">
                <img src="assets/img/personajes/2-1.jpg" class="character-img img-fluid" alt="Fei Long Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/2-2.jpg" class="glightbox">
                <img src="assets/img/personajes/2-2.jpg" class="character-img img-fluid" alt="Fei Long Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/2-3.jpg" class="glightbox">
                <img src="assets/img/personajes/2-3.jpg" class="character-img img-fluid" alt="Fei Long con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/2-4.jpg" class="glightbox">
                <img src="assets/img/personajes/2-4.jpg" class="character-img img-fluid" alt="Fei Long pose"> </a>
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
                <a href="assets/img/personajes/3-1.jpg" class="glightbox">
                <img src="assets/img/personajes/3-1.jpg" class="character-img img-fluid" alt="Chun Li Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/3-2.jpg" class="glightbox">
                <img src="assets/img/personajes/3-2.jpg" class="character-img img-fluid" alt="Chun Li Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/3-3.jpg" class="glightbox">
                <img src="assets/img/personajes/3-3.jpg" class="character-img img-fluid" alt="Chun Li con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/3-4.jpg" class="glightbox">
                <img src="assets/img/personajes/3-4.jpg" class="character-img img-fluid" alt="Chun Li pose"> </a>
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
                <a href="assets/img/personajes/4-1.jpg" class="glightbox">
                <img src="assets/img/personajes/4-1.jpg" class="character-img img-fluid" alt="Ken Frontal"> </a>
              </div> </div> </div> 
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/4-2.jpg" class="glightbox">
                <img src="assets/img/personajes/4-2.jpg" class="character-img img-fluid" alt="Ken Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/4-3.jpg" class="glightbox">
                <img src="assets/img/personajes/4-3.jpg" class="character-img img-fluid" alt="Ken con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/4-4.jpg" class="glightbox">
                <img src="assets/img/personajes/4-4.jpg" class="character-img img-fluid" alt="Ken pose"> </a>
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
                <a href="assets/img/personajes/5-1.jpg" class="glightbox">
                <img src="assets/img/personajes/5-1.jpg" class="character-img img-fluid" alt="Dhalsim Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/5-2.jpg" class="glightbox">
                <img src="assets/img/personajes/5-2.jpg" class="character-img img-fluid" alt="Dhalsim Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/5-3.jpg" class="glightbox">
                <img src="assets/img/personajes/5-3.jpg" class="character-img img-fluid" alt="Dhalsim con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/5-4.jpg" class="glightbox">
                <img src="assets/img/personajes/5-4.jpg" class="character-img img-fluid" alt="Dhalsim pose"> </a>
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
                <a href="assets/img/personajes/6-1.jpg" class="glightbox">
                <img src="assets/img/personajes/6-1.jpg" class="character-img img-fluid" alt="M. Bison Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">      
                <a href="assets/img/personajes/6-2.jpg" class="glightbox">
                <img src="assets/img/personajes/6-2.jpg" class="character-img img-fluid" alt="M. Bison Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/6-3.jpg" class="glightbox">
                <img src="assets/img/personajes/6-3.jpg" class="character-img img-fluid" alt="M. Bison con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/6-4.jpg" class="glightbox">
                <img src="assets/img/personajes/6-4.jpg" class="character-img img-fluid" alt="M. Bison pose"> </a>
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
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/7-1.jpg" class="glightbox">
                <img src="assets/img/personajes/7-1.jpg" class="character-img img-fluid" alt="Guile Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/7-2.jpg" class="glightbox">
                <img src="assets/img/personajes/7-2.jpg" class="character-img img-fluid" alt="Guile Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/7-3.jpg" class="glightbox">
                <img src="assets/img/personajes/7-3.jpg" class="character-img img-fluid" alt="Guile con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/7-4.jpg" class="glightbox">
                <img src="assets/img/personajes/7-4.jpg" class="character-img img-fluid" alt="Guile pose"> </a>
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
                <a href="assets/img/personajes/8-1.jpg" class="glightbox">
                <img src="assets/img/personajes/8-1.jpg" class="character-img img-fluid" alt="Dee Jay Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/8-2.jpg" class="glightbox">
                <img src="assets/img/personajes/8-2.jpg" class="character-img img-fluid" alt="Dee Jay Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/8-3.jpg" class="glightbox">
                <img src="assets/img/personajes/8-3.jpg" class="character-img img-fluid" alt="Dee Jay con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/8-4.jpg" class="glightbox">
                <img src="assets/img/personajes/8-4.jpg" class="character-img img-fluid" alt="Dee Jay pose"> </a>
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
                <a href="assets/img/personajes/9-1.jpg" class="glightbox">
                <img src="assets/img/personajes/9-1.jpg" class="character-img img-fluid" alt="Cammy Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/9-2.jpg" class="glightbox">
                <img src="assets/img/personajes/9-2.jpg" class="character-img img-fluid" alt="Cammy Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/9-3.jpg" class="glightbox">
                <img src="assets/img/personajes/9-3.jpg" class="character-img img-fluid" alt="Cammy con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/9-4.jpg" class="glightbox">
                <img src="assets/img/personajes/9-4.jpg" class="character-img img-fluid" alt="Cammy pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#cammy" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cammy" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <!-- ---------------------------------------------------------- Wave  4 ---------------------------------------------------------- -->
          <div id="sagat" class="carousel slide" data-bs-interval="false"> <!-- ------------------------------------------------------ SAGAT -->
            <h4>Sagat</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/10-1.jpg" class="glightbox">
                <img src="assets/img/personajes/10-1.jpg" class="character-img img-fluid" alt="Sagat Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/10-2.jpg" class="glightbox">
                <img src="assets/img/personajes/10-2.jpg" class="character-img img-fluid" alt="Sagat Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/10-3.jpg" class="glightbox">
                <img src="assets/img/personajes/10-3.jpg" class="character-img img-fluid" alt="Sagat con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/10-4.jpg" class="glightbox">
                <img src="assets/img/personajes/10-4.jpg" class="character-img img-fluid" alt="Sagat pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#sagat" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sagat" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="blanka" class="carousel slide" data-bs-interval="false"> <!-- ----------------------------------------------------- BLANKA -->
            <h4>Blanka</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/11-1.jpg" class="glightbox">
                <img src="assets/img/personajes/11-1.jpg" class="character-img img-fluid" alt="Blanka Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/11-2.jpg" class="glightbox">
                <img src="assets/img/personajes/11-2.jpg" class="character-img img-fluid" alt="Blanka Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/11-3.jpg" class="glightbox">
                <img src="assets/img/personajes/11-3.jpg" class="character-img img-fluid" alt="Blanka con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/11-4.jpg" class="glightbox">
                <img src="assets/img/personajes/11-4.jpg" class="character-img img-fluid" alt="Blanka pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#blanka" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#blanka" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="vega" class="carousel slide" data-bs-interval="false"> <!-- ------------------------------------------------------- VEGA -->
            <h4>Vega</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/12-1.jpg" class="glightbox">
                <img src="assets/img/personajes/12-1.jpg" class="character-img img-fluid" alt="Vega Frontal"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/12-2.jpg" class="glightbox">
                <img src="assets/img/personajes/12-2.jpg" class="character-img img-fluid" alt="Vega Lateral"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/12-3.jpg" class="glightbox">
                <img src="assets/img/personajes/12-3.jpg" class="character-img" alt="Vega con efecto"> </a>
              </div> </div> </div>
              <div class="carousel-item"> <div class="character-item"> <div class="character-images">
                <a href="assets/img/personajes/12-4.jpg" class="glightbox">
                <img src="assets/img/personajes/12-4.jpg" class="character-im" alt="Vega pose"> </a>
              </div> </div> </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#vega" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#vega" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <!-- ---------------------------------------------------------- Wave  5 ---------------------------------------------------------- -->
                                                                      <!-- ------------------------------------------------------- AKUMA -->
                                                                      <!-- ---------------------------------------------------- E. HONDA -->
                                                                      <!-- ------------------------------------------------------ BALROG -->
        </div>
      </div>
    </div>
  </div>
@endsection