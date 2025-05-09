@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ Contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes con variación de color</h3>
    </div>
    <!-- -------------------------------------------------------------- Lista -------------------------------------------------------------- -->
    <div class="col-md-12">
      <ol>
        <li id="ryugris" class="active">Ryu Player 2</li>
        <li id="kenblanco">Ken Player 2</li>
        <li id="chunliroja">Chun Li Roja</li>
        <li id="mbisonazul">M. Bison Player 2</li>
        <li id="guileazul">Guile Player 2</li>
      </ol>
    </div>
    <!-- ------------------------------------------------------ Contenedor personajes ------------------------------------------------------ -->
    <div class="variantes" id="variantes">
      <!-- -------------------------------------------------------------------------------------------------------------------- Ryu Player 2 -->
      <div class="ryugris-container variantes-container">
        <h4>Ryu Player 2</h4>
        <img src="assets/img/variantes/ryugris1.jpg" class="variante-img" alt="Ryu Player 2">
        <img src="assets/img/variantes/ryugris2.jpg" class="variante-img" alt="Ryu Player 2 posando">
      </div>
      <!-- -------------------------------------------------------------------------------------------------------------------- Ken Player 2 -->
      <div class="kenblanco-container variantes-container">
        <h4>Ken PLayer 2</h4>
        <img src="assets/img/variantes/kenblanco1.jpg" class="variante-img" alt="Ken Player 2">
        <img src="assets/img/variantes/kenblanco2.jpg" class="variante-img" alt="Ken Player 2 posando">
      </div>        
      <!-- -------------------------------------------------------------------------------------------------------------------- Chun Li Roja -->
      <div class="chunliroja-container variantes-container">
        <h4>Chun Li Roja</h4>
        <img src="assets/img/variantes/chunliroja1.jpg" class="variante-img" alt="Chun Li Roja">
        <img src="assets/img/variantes/chunliroja2.jpg" class="variante-img" alt="Chun Li Roja posando">
      </div> 
      <!-- ---------------------------------------------------------------------------------------------------------------- M Bison Player 2 -->
      <div class="mbisonazul-container variantes-container">
        <h4>M. Bison Player 2</h4>
        <img src="assets/img/variantes/mbisonazul1.jpg" class="variante-img" alt="M. Bison Player 2">
        <img src="assets/img/variantes/mbisonazul2.jpg" class="variante-img" alt="M. Bison Player 2 posando">
      </div>    
      <!-- ------------------------------------------------------------------------------------------------------------------ Guile Player 2 -->
      <div class="guileazul-container variantes-container">
        <h4>Guile Player 2</h4>
        <img src="assets/img/variantes/guileazul1.jpg" class="variante-img" alt="Guile Player 2">
        <img src="assets/img/variantes/guileazul2.jpg" class="variante-img" alt="Guile Player 2 posando">
      </div>             
    </div> <!-- Contenedor personajes -->
  </div> <!-- Contenedor general -->
@endsection