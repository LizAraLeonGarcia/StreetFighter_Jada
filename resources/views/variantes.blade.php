@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ Contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes con variación de color</h3>
    </div>
    <!-- -------------------------------------------------------------- Lista -------------------------------------------------------------- -->
    <div class="col-md-12">
      <ol class="menu-variantes">
        <li id="ryuGris" class="active">Ryu</li>
        <li id="kenBlanco">Ken</li>
        <li id="chunLiRoja">Chun Li</li>
        <li id="mBisonAzul">M. Bison</li>
        <li id="guileAzul">Guile</li>
        <li id="cammyGris">Cammy</li>
        <li id="blankaAzul">Blanka</li>
      </ol>
    </div>
    <!-- ------------------------------------------------------ Contenedor personajes ------------------------------------------------------ -->
    <div class="variantes" id="variantes">
      <!-- -------------------------------------------------------------------------------------------------------------------- Ryu Player 2 -->
      <div class="ryuGris-container variantes-container">
        <h4>Ryu</h4>
        <img src="assets/img/variantes/ryugris1.jpg" class="variante-img" alt="Ryu gris">
        <img src="assets/img/variantes/ryugris2.jpg" class="variante-img" alt="Ryu gris posando">
      </div>
      <!-- -------------------------------------------------------------------------------------------------------------------- Ken Player 2 -->
      <div class="kenBlanco-container variantes-container">
        <h4>Ken</h4>
        <img src="assets/img/variantes/kenblanco1.jpg" class="variante-img" alt="Ken blanco">
        <img src="assets/img/variantes/kenblanco2.jpg" class="variante-img" alt="Ken blanco posando">
      </div>        
      <!-- -------------------------------------------------------------------------------------------------------------------- Chun Li Roja -->
      <div class="chunLiRoja-container variantes-container">
        <h4>Chun Li</h4>
        <img src="assets/img/variantes/chunliroja1.jpg" class="variante-img" alt="Chun Li roja">
        <img src="assets/img/variantes/chunliroja2.jpg" class="variante-img" alt="Chun Li roja posando">
      </div> 
      <!-- --------------------------------------------------------------------------------------------------------------------- M Bison Azul -->
      <div class="mBisonAzul-container variantes-container">
        <h4>M. Bison</h4>
        <img src="assets/img/variantes/mbisonazul1.jpg" class="variante-img" alt="M. Bison azul">
        <img src="assets/img/variantes/mbisonazul2.jpg" class="variante-img" alt="M. Bison azul posando">
      </div>    
      <!-- ------------------------------------------------------------------------------------------------------------------ Guile Player 2 -->
      <div class="guileAzul-container variantes-container">
        <h4>Guile</h4>
        <img src="assets/img/variantes/guileazul1.jpg" class="variante-img" alt="Guile azul">
        <img src="assets/img/variantes/guileazul2.jpg" class="variante-img" alt="Guile azul posando">
      </div> 
      <!-- ------------------------------------------------------------------------------------------------------------------- Cammy Player 2 -->            
      <div class="cammyGris-container variantes-container"> 
        <h4>Cammy</h4>
        <img src="assets/img/variantes/cammygris1.jpg" class="variante-img" alt="Cammy gris">
        <img src="assets/img/variantes/cammygris2.jpg" class="variante-img" alt="Cammy gris posando">
      </div>
      <!-- ---------------------------------------------------------------------------------------------------------------------- Blanka azul -->            
      <div class="blankaAzul-container variantes-container"> 
        <h4>Blanka</h4>
        <img src="assets/img/variantes/blankaazul1.jpg" class="variante-img" alt="Blanka azul">
        <img src="assets/img/variantes/blankaazul2.jpg" class="variante-img" alt="Blanka azul posando">
      </div>
    </div> <!-- Contenedor personajes -->
  </div> <!-- Contenedor general -->
@endsection