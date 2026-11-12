@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ Contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Variaciones de colores de cada personaje</h3>
    </div>
    <div>
      <!-- -------------------------------------------------------------- Lista -------------------------------------------------------------- -->
      <div>
        <ol class="menu-variantes">
          <li id="chunli" class="active">Chun Li</li>
          <li id="vega">Vega</li>
          <li id="cammy">Cammy</li>
          <li id="guile">Guile</li>
          <li id="dhalsim">Dhalsim</li>
          <li id="ryu">Ryu</li>
          <li id="ken">Ken</li>
          <li id="blanka">Blanka</li>
          <li id="mbison">M. Bison</li>
          <li id="zangief">Zangief</li>
          <li id="balrog">Balrog</li>
        </ol>
      </div>
      <!-- ------------------------------------------------------ Contenedor personajes ------------------------------------------------------ -->
      <div class="variantes" id="variantes">
        <!-- ---------------------------------------------------------------------------------------------------------------------- Chun Li -->
        <div class="chunli-container variantes-container">
          <h4>Chun Li</h4>
          <img src="assets/img/variantes/chunliroja1.jpg" class="variante-img" alt="Chun Li roja">
          <img src="assets/img/variantes/chunliroja2.jpg" class="variante-img" alt="Chun Li roja posando">
        </div> 
        <!-- ------------------------------------------------------------------------------------------------------------------------- Vega -->
        <div class="vega-container variantes-container">
          <h4>Vega</h4>
          <img src="assets/img/variantes/vegaGrisOscuro1.jpg" class="variantes-img" alt="Vega gris oscuro">
          <img src="assets/img/variantes/vegaGrisOscuro2.jpg" class="variantes-img" alt="Vega gris oscuro">
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------ Cammy -->            
        <div class="cammy-container variantes-container"> 
          <h4>Cammy</h4>
          <img src="assets/img/variantes/cammyplata1.jpg" class="variante-img" alt="Cammy plata">
          <img src="assets/img/variantes/cammyplata2.jpg" class="variante-img" alt="Cammy plata posando">
          <img src="assets/img/variantes/cammyrosa1.jpg" class="variantes.img" alt="Cammy rosa">
          <img src="assets/img/variantes/cammyrosa2.jpg" class="variantes-img" alt="Cammy rosa posando">
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------ Guile -->
        <div class="guile-container variantes-container">
          <h4>Guile</h4>
          <img src="assets/img/variantes/guileazul1.jpg" class="variante-img" alt="Guile azul">
          <img src="assets/img/variantes/guileazul2.jpg" class="variante-img" alt="Guile azul posando">
          <img src="assets/img/variantes/guilerojo1.jpg" class="variante-img" alt="Guile rojo">
          <img src="assets/img/variantes/guilerojo2.jpg" class="variante-img" alt="Guile rojo posando">
        </div> 
        <!-- ---------------------------------------------------------------------------------------------------------------------- Dhalsim -->
        <div class="dhalsim-container variantes-container">
          <h4>Dhalsim</h4>
          <img src="assets/img/variantes/dhalsimazul1.jpg" class="variante-img" alt="Dhalsim azul">
          <img src="assets/img/variantes/dhalsimazul2.jpg" class="variante-img" alt="Dhalsim azul posando">
        </div> 
        <!-- -------------------------------------------------------------------------------------------------------------------- Ryu Player 2 -->
        <div class="ryu-container variantes-container">
          <h4>Ryu</h4>
          <img src="assets/img/variantes/ryugris1.jpg" class="variante-img" alt="Ryu gris">
          <img src="assets/img/variantes/ryugris2.jpg" class="variante-img" alt="Ryu gris posando">
        </div>
        <!-- -------------------------------------------------------------------------------------------------------------------- Ken Player 2 -->
        <div class="ken-container variantes-container">
          <h4>Ken</h4>
          <img src="assets/img/variantes/kenblanco1.jpg" class="variante-img" alt="Ken blanco">
          <img src="assets/img/variantes/kenblanco2.jpg" class="variante-img" alt="Ken blanco posando">
        </div>    
        <!-- ---------------------------------------------------------------------------------------------------------------------- Blanka azul -->            
        <div class="blanka-container variantes-container"> 
          <h4>Blanka</h4>
          <img src="assets/img/variantes/blankaazul1.jpg" class="variante-img" alt="Blanka azul">
          <img src="assets/img/variantes/blankaazul2.jpg" class="variante-img" alt="Blanka azul posando">
        </div>        
        <!-- ---------------------------------------------------------------------------------------------------------------------- M Bison -->
        <div class="mbison-container variantes-container">
          <h4>M. Bison</h4>
          <img src="assets/img/variantes/mbisonazul1.jpg" class="variante-img" alt="M. Bison azul">
          <img src="assets/img/variantes/mbisonazul2.jpg" class="variante-img" alt="M. Bison azul posando">
          <img src="assets/img/variantes/mbisonazuldorado1.jpg" class="variante-img" alt="M. Bison azul rey con dorado">
          <img src="assets/img/variantes/mbisonazuldorado2.jpg" class="variante-img" alt="M. Bison azul rey con dorado posando">
        </div>
        <!-- ---------------------------------------------------------------------------------------------------------------------- Zangief -->            
        <div class="zangief-container variantes-container"> 
          <h4>Zangief</h4>
          <img src="assets/img/variantes/zangiefgris1.jpg" class="variante-img" alt="Zangief gris">
          <img src="assets/img/variantes/zangiefgris2.jpg" class="variante-img" alt="Zangief gris posando">
        </div>  
        <!-- ----------------------------------------------------------------------------------------------------------------------- Balrog -->            
        <div class="balrog-container variantes-container"> 
          <h4>Balrog</h4>
          <img src="assets/img/variantes/balrogNaranja1.jpg" class="variante-img" alt="Balrog naranja">
          <img src="assets/img/variantes/balrogNaranja2.jpg" class="variante-img" alt="Balrog naranja posando">
        </div>    
      </div> <!-- Contenedor personajes -->
    </div>
  </div> <!-- Contenedor general -->
@endsection