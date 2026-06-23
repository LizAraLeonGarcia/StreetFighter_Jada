@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes</h3>
    </div>
    <!-- ---------------------------------------------------- contenedor para personaje ---------------------------------------------------- -->
    <div class="personajes">
      <div class="row">
        <!-- ------------------------------------------------------------------------------------------------------- Lista columna izquierda -->
        <div class="col-md-4">
          <!-- contendor para paginación --------------------------------------------------------------------------------------------------- -->
          <ol id="customPagination">
            <li class="char chunli" data-bs-target="#chunli" data-bs-slide-to="0">Chun Li</li>
            <li class="char vega" data-bs-target="#vega" data-bs-slide-to="0">Vega</li>
            <li class="char cammy" data-bs-target="#cammy" data-bs-slide-to="0">Cammy</li>
            <li class="char guile" data-bs-target="#guile" data-bs-slide-to="0">Guile</li>
            <li class="char ehonda" data-bs-target="#ehonda" data-bs-slide-to="0">E. Honda</li>
            <li class="char dhalsim" data-bs-target="#dhalsim" data-bs-slide-to="0">Dhalsim</li>
            <li class="char deejay" data-bs-target="#deejay" data-bs-slide-to="0">Dee Jay</li>
            <li class="char ryu" data-bs-target="#ryu" data-bs-slide-to="0">Ryu</li>
            <li class="char sagat" data-bs-target="#sagat" data-bs-slide-to="0">Sagat</li>
            <li class="char ken" data-bs-target="#ken" data-bs-slide-to="0">Ken</li>
            <li class="char blanka" data-bs-target="#blanka" data-bs-slide-to="0">Blanka</li>
            <li class="char mbison" data-bs-target="#mbison" data-bs-slide-to="0">M. Bison</li>
            <li class="char akuma" data-bs-target="#akuma" data-bs-slide-to="0">Akuma</li>
            <li class="char thawk" data-bs-target="#thawk" data-bs-slide-to="0">T. Hawk</li>
            <li class="char feilong" data-bs-target="#feilong" data-bs-slide-to="0">Fei Long</li>
            <li class="char balrog" data-bs-target="#balrog" data-bs-slide-to="0">Balrog</li>
            <li class="char zangief" data-bs-target="#zangief" data-bs-slide-to="0">Zangief</li>
          </ol>
        </div> <!-- contenedor de la lista / paginación -->
        <!-- ----------------------------------------------------- Columna del carrusel ----------------------------------------------------- --> 
        <div class="col-md-8">       
          <div id="chunli" class="carousel slide character-chunli" data-bs-interval="false"> <!-- ----------------------------------- CHUN LI -->
            <h4>Chun Li</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/3-1.jpg">
                <img src="assets/img/personajes/3-1.jpg" class="character-imagen" alt="Chun Li Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/3-2.jpg">
                <img src="assets/img/personajes/3-2.jpg" class="character-imagen" alt="Chun Li Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/3-3.jpg">
                <img src="assets/img/personajes/3-3.jpg" class="character-imagen" alt="Chun Li con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/3-4.jpg">
                <img src="assets/img/personajes/3-4.jpg" class="character-imagen" alt="Chun Li pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#chunli" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#chunli" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="vega" class="carousel slide character-vega" data-bs-interval="false"> <!-- ------------------------------------------ VEGA -->
            <h4>Vega</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/12-1.jpg">
                <img src="assets/img/personajes/12-1.jpg" class="character-imagen" alt="Vega Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/12-2.jpg">
                <img src="assets/img/personajes/12-2.jpg" class="character-imagen" alt="Vega Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/12-3.jpg">
                <img src="assets/img/personajes/12-3.jpg" class="character-imagen" alt="Vega con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/12-4.jpg">
                <img src="assets/img/personajes/12-4.jpg" class="character-imagen" alt="Vega pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#vega" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#vega" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="cammy" class="carousel slide character-cammy" data-bs-interval="false"> <!-- --------------------------------------- CAMMY -->
            <h4>Cammy</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/9-1.jpg">
                <img src="assets/img/personajes/9-1.jpg" class="character-imagen" alt="Cammy Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/9-2.jpg">
                <img src="assets/img/personajes/9-2.jpg" class="character-imagen" alt="Cammy Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/9-3.jpg">
                <img src="assets/img/personajes/9-3.jpg" class="character-imagen" alt="Cammy con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/9-4.jpg">
                <img src="assets/img/personajes/9-4.jpg" class="character-imagen" alt="Cammy pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#cammy" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cammy" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="guile" class="carousel slide character-guile" data-bs-interval="false"> <!-- --------------------------------------- GUILE -->
            <h4>Guile</h4>
            <div class="carousel-inner">
              <div class="carousel-item active"> 
                <a href="assets/img/personajes/7-1.jpg">
                <img src="assets/img/personajes/7-1.jpg" class="character-imagen" alt="Guile Frontal"> </a>
              </div>
              <div class="carousel-item"> 
                <a href="assets/img/personajes/7-2.jpg">
                <img src="assets/img/personajes/7-2.jpg" class="character-imagen" alt="Guile Lateral"> </a>
              </div>
              <div class="carousel-item"> 
                <a href="assets/img/personajes/7-3.jpg">
                <img src="assets/img/personajes/7-3.jpg" class="character-imagen" alt="Guile con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/7-4.jpg">
                <img src="assets/img/personajes/7-4.jpg" class="character-imagen" alt="Guile pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#guile" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#guile" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="ehonda" class="carousel slide character-ehonda" data-bs-interval="false"> <!-- ---------------------------------- E. HONDA -->
            <h4>E. Honda</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/14-1.jpg">
                <img src="assets/img/personajes/14-1.jpg" class="character-imagen" alt="E. Honda Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/14-2.jpg">
                <img src="assets/img/personajes/14-2.jpg" class="character-imagen" alt="E. Honda Lateral"> </a>
              </div>
              <div class="carousel-item"> 
                <a href="assets/img/personajes/14-3.jpg">
                <img src="assets/img/personajes/14-3.jpg" class="character-imagen" alt="E. Honda con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/14-4.jpg">
                <img src="assets/img/personajes/14-4.jpg" class="character-imagen" alt="E. Honda pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#ehonda" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ehonda" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="dhalsim" class="carousel slide character-dhalsim" data-bs-interval="false"> <!-- --------------------------------- DHALSIM -->
            <h4>Dhalsim</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/5-1.jpg">
                <img src="assets/img/personajes/5-1.jpg" class="character-imagen" alt="Dhalsim Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/5-2.jpg">
                <img src="assets/img/personajes/5-2.jpg" class="character-imagen" alt="Dhalsim Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/5-3.jpg">
                <img src="assets/img/personajes/5-3.jpg" class="character-imagen" alt="Dhalsim con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/5-4.jpg">
                <img src="assets/img/personajes/5-4.jpg" class="character-imagen" alt="Dhalsim pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#dhalsim" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#dhalsim" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="deejay" class="carousel slide character-deejay" data-bs-interval="false"> <!-- ----------------------------------- DEE JAY -->
            <h4>Dee Jay</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/8-1.jpg">
                <img src="assets/img/personajes/8-1.jpg" class="character-imagen" alt="Dee Jay Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/8-2.jpg">
                <img src="assets/img/personajes/8-2.jpg" class="character-imagen" alt="Dee Jay Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/8-3.jpg">
                <img src="assets/img/personajes/8-3.jpg" class="character-imagen" alt="Dee Jay con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/8-4.jpg">
                <img src="assets/img/personajes/8-4.jpg" class="character-imagen" alt="Dee Jay pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#deejay" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#deejay" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="ryu" class="carousel slide character-ryu" data-bs-interval="false"> <!-- --------------------------------------------- RYU -->
            <div class="carousel-inner">
              <h4>Ryu</h4>
              <div class="carousel-item active">
                <a href="assets/img/personajes/1-1.jpg">
                <img src="assets/img/personajes/1-1.jpg" class="character-imagen" alt="Ryu Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/1-2.jpg">
                <img src="assets/img/personajes/1-2.jpg" class="character-imagen" alt="Ryu Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/1-3.jpg">
                <img src="assets/img/personajes/1-3.jpg" class="character-imagen" alt="Ryu con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/1-4.jpg">
                <img src="assets/img/personajes/1-4.jpg" class="character-imagen" alt="Ryu pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#ryu" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ryu" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
                    <div id="sagat" class="carousel slide character-sagat" data-bs-interval="false"> <!-- ----------------------------- SAGAT -->
            <h4>Sagat</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/10-1.jpg">
                <img src="assets/img/personajes/10-1.jpg" class="character-imagen" alt="Sagat Frontal"> </a>
              </div>
              <div class="carousel-item"> 
                <a href="assets/img/personajes/10-2.jpg">
                <img src="assets/img/personajes/10-2.jpg" class="character-imagen" alt="Sagat Lateral"> </a>
              </div>
              <div class="carousel-item"> 
                <a href="assets/img/personajes/10-3.jpg">
                <img src="assets/img/personajes/10-3.jpg" class="character-imagen" alt="Sagat con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/10-4.jpg">
                <img src="assets/img/personajes/10-4.jpg" class="character-imagen" alt="Sagat pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#sagat" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#sagat" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="ken" class="carousel slide character-ken" dta-bs-interval="false"> <!-- ---------------------------------------------- KEN -->
            <h4>Ken</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/4-1.jpg">
                <img src="assets/img/personajes/4-1.jpg" class="character-imagen" alt="Ken Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/4-2.jpg">
                <img src="assets/img/personajes/4-2.jpg" class="character-imagen" alt="Ken Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/4-3.jpg">
                <img src="assets/img/personajes/4-3.jpg" class="character-imagen" alt="Ken con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/4-4.jpg">
                <img src="assets/img/personajes/4-4.jpg" class="character-imagen" alt="Ken pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#ken" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ken" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
          <div id="blanka" class="carousel slide character-blanka" data-bs-interval="false"> <!-- ------------------------------------ BLANKA -->
            <h4>Blanka</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/11-1.jpg">
                <img src="assets/img/personajes/11-1.jpg" class="character-imagen" alt="Blanka Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/11-2.jpg">
                <img src="assets/img/personajes/11-2.jpg" class="character-imagen" alt="Blanka Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/11-3.jpg">
                <img src="assets/img/personajes/11-3.jpg" class="character-imagen" alt="Blanka con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/11-4.jpg">
                <img src="assets/img/personajes/11-4.jpg" class="character-imagen" alt="Blanka pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#blanka" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#blanka" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>
                    <div id="mbison" class="carousel slide character-mbison" data-bs-interval="false"> <!-- ----------------------------------- M BISON -->
            <h4>M. Bison</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/6-1.jpg">
                <img src="assets/img/personajes/6-1.jpg" class="character-imagen" alt="M. Bison Frontal"> </a>
              </div>
              <div class="carousel-item">     
                <a href="assets/img/personajes/6-2.jpg">
                <img src="assets/img/personajes/6-2.jpg" class="character-imagen" alt="M. Bison Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/6-3.jpg">
                <img src="assets/img/personajes/6-3.jpg" class="character-imagen" alt="M. Bison con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/6-4.jpg">
                <img src="assets/img/personajes/6-4.jpg" class="character-imagen" alt="M. Bison pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mbison" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mbison" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>  
          <div id="akuma" class="carousel slide character-akuma" data-bs-interval="false"> <!-- --------------------------------------- AKUMA -->
            <h4>Akuma</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/13-1.jpg">
                <img src="assets/img/personajes/13-1.jpg" class="character-imagen" alt="Akuma Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/13-2.jpg">
                <img src="assets/img/personajes/13-2.jpg" class="character-imagen" alt="Akuma Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/13-3.jpg">
                <img src="assets/img/personajes/13-3.jpg" class="character-imagen" alt="Akuma con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/13-4.jpg">
                <img src="assets/img/personajes/13-4.jpg" class="character-imagen" alt="Akuma pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#akuma" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#akuma" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>

          <div id="feilong" class="carousel slide character-feilong" data-bs-interval="false">  <!-- ------------------------------- FEI LONG -->
            <h4>Fei Long</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/2-1.jpg">
                <img src="assets/img/personajes/2-1.jpg" class="character-imagen" alt="Fei Long Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/2-2.jpg">
                <img src="assets/img/personajes/2-2.jpg" class="character-imagen" alt="Fei Long Lateral"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/2-3.jpg">
                <img src="assets/img/personajes/2-3.jpg" class="character-imagen" alt="Fei Long con efecto"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/2-4.jpg">
                <img src="assets/img/personajes/2-4.jpg" class="character-imagen" alt="Fei Long pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#feilong" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#feilong" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>        
          <div id="balrog" class="carousel slide character-balrog" data-bs-interval="false"> <!-- ------------------------------------ BALROG -->
            <h4>Balrog</h4>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="assets/img/personajes/15-1.jpg">
                <img src="assets/img/personajes/15-1.jpg" class="character-imagen" alt="Balrog Frontal"> </a>
              </div>
              <div class="carousel-item">
                <a href="assets/img/personajes/15-2.jpg">
                <img src="assets/img/personajes/15-2.jpg" class="character-imagen" alt="Balrog Lateral"> </a>
              </div>
              <div class="carousel-item"> 
                <a href="assets/img/personajes/15-3.jpg">
                <img src="assets/img/personajes/15-3.jpg" class="character-imagen" alt="Balrog con efecto"> </a>
              </div>
              <div class="carousel-item"> 
                <a href="assets/img/personajes/15-4.jpg">
                <img src="assets/img/personajes/15-4.jpg" class="character-imagen" alt="Balrog pose"> </a>
              </div>
            </div>
            <!-- Botones de navegación (prev y next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#balrog" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </button>
            <button class="carousel-control-next" type="button" data-bs-target="#balrog" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </button>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection