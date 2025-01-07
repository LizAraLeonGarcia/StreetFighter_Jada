@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes con variación de color</h3>
    </div>
    <!-- --------------------------------------------------- Lista  --------------------------------------------------- -->
    <div class="col-md-12">
    <!-- ------------------------------------------------- contendor  ------------------------------------------------- -->
      <ol>
        <li id="ryugris" class="active">Ryu Player 2</li>
        <li id="kenblanco">Ken Player 2</li>
        <li id="chunlired">Chun Li Red</li>
        <li id="mbisonazul">M. Bison Player 2</li>
          </ol>
      </ol>
    </div>
    <!-- ---------------------------------------------------- contenedor para personaje ---------------------------------------------------- -->
    <div class="variantes" id="variantes">
      <!-- ------------------------------------------------------- Ryu Player 2 ------------------------------------------------------- -->
      <div class="evilryu-container swiper-container">
        <h4>Ryu PLayer 2</h4>
        <div class="swiper-wrapper">
          <img src="assets/img/variantes/ryugris1.jpg" class="character-img img-fluid" alt="Ryu Player 2">
          <img src="assets/img/variantes/ryugris2.jpg" class="character-img img-fluid" alt="Ryu Player 2 posando">
        </div>
        <div class="swiper-button-next"></div> <!-- botón para siguiente -->
        <div class="swiper-button-prev"></div> <!-- botón para previo --> 
      </div>
      <!-- ------------------------------------------------------- Ken Player 2 ------------------------------------------------------- -->
      <div class="kenblanco-container swiper-container">
        <h4>Ken PLayer 2</h4>
        <div class="swiper-wrapper">
          <img src="assets/img/variantes/kenblanco1.jpg" class="character-img img-fluid" alt="Ken Player 2">
          <img src="assets/img/variantes/kenblanco2.jpg" class="character-img img-fluid" alt="Ken Player 2 posando">
        </div>
        <div class="swiper-button-next"></div> <!-- botón para siguiente -->
        <div class="swiper-button-prev"></div> <!-- botón para previo --> 
      </div>        
      <!-- ------------------------------------------------------- Ryu Player 2 ------------------------------------------------------- -->
      <div class="chunliroja-container swiper-container">
        <h4>Ryu PLayer 2</h4>
        <div class="swiper-wrapper">
          <img src="assets/img/variantes/chunliroja1.jpg" class="character-img img-fluid" alt="Chun Li Red">
          <img src="assets/img/variantes/chunliroja2.jpg" class="character-img img-fluid" alt="Chun Li Red posando">
        </div>
        <div class="swiper-button-next"></div> <!-- botón para siguiente -->
        <div class="swiper-button-prev"></div> <!-- botón para previo --> 
      </div>             
    </div>
  </div>
@endsection