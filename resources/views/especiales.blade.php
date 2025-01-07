@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes exclusivos de la SDCC</h3>
    </div>
    <!-- --------------------------------------------------- Lista  --------------------------------------------------- -->
    <div class="col-md-12">
    <!-- ------------------------------------------------- contendor  ------------------------------------------------- -->
      <ol>
        <li id="evilryu" class="active">Evil Ryu</li>
        <li id="violentken">Violent Ken</li>
        <li id="chunlirosa">Chun Li Player 2</li>
      </ol>
    </div>
    <!-- ---------------------------------------------------- contenedor para personaje ---------------------------------------------------- -->
    <div class="especiales" id="especiales">
      <!-- ------------------------------------------------------- Evil Ryu ------------------------------------------------------- -->
      <div class="evilryu-container swiper-container">
        <h4>Evil Ryu</h4>
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/evilryu1.jpg"><img src="assets/img/especiales/evilryu1.jpg" class="img-fluid" alt="Ryu frontal"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/evilryu2.jpg"><img src="assets/img/especiales/evilryu2.jpg" class="img-fluid" alt="Ryu trasera"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/evilryu3.jpg"><img src="assets/img/especiales/evilryu3.jpg" class="img-fluid" alt="Ryu dentro"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/evilryu4.jpg"><img src="assets/img/especiales/evilryu4.jpg" class="img-fluid" alt="Ryu efecto 1"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/evilryu5.jpg"><img src="assets/img/especiales/evilryu5.jpg" class="img-fluid" alt="Ryu efecto 2"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/evilryu6.jpg"><img src="assets/img/especiales/evilryu6.jpg" class="img-fluid" alt="Ryu pose 1"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/evilryu7.jpg"><img src="assets/img/especiales/evilryu7.jpg" class="img-fluid" alt="Ryu pose 2"></a></div>
        </div>
        <div class="swiper-button-next-especiales"></div> <!-- botón para siguiente -->
        <div class="swiper-button-prev-especiales"></div> <!-- botón para previo --> 
      </div>
      <!-- ------------------------------------------------------- Violent Ken ------------------------------------------------------- -->
      <div class="violentken-container swiper-container" style="display: none;">
        <h4>Violent Ken</h4>
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/violentken1.jpg"><img src="assets/img/especiales/violentken1.jpg" class="img-fluid" alt="Violent Ken frontal"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/violentken2.jpg"><img src="assets/img/especiales/violentken2.jpg" class="img-fluid" alt="Violent Ken trasera"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/violentken3.jpg"><img src="assets/img/especiales/violentken3.jpg" class="img-fluid" alt="Violent Ken dentro"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/violentken4.jpg"><img src="assets/img/especiales/violentken4.jpg" class="img-fluid" alt="Violent Ken efecto 1"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/violentken5.jpg"><img src="assets/img/especiales/violentken5.jpg" class="img-fluid" alt="Violent Ken efecto 2"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/violentken6.jpg"><img src="assets/img/especiales/violentken6.jpg" class="img-fluid" alt="Violent Ken pose 1"></a></div>
          <div class="swiper-slide"><a data-especiales="images-especiales" href="assets/img/especiales/violentken7.jpg"><img src="assets/img/especiales/violentken7.jpg" class="img-fluid" alt="Violent Ken pose 2"></a></div>
        </div>
        <div class="swiper-button-next-especiales"></div> <!-- botón para siguiente -->
        <div class="swiper-button-prev-especiales"></div> <!-- botón para previo --> 
      </div>
      <!-- ------------------------------------------------------- Chun Li ------------------------------------------------------- -->
      <div class="chunlirosa-container swiper-container" style="display: none;">
        <h4>Chun Li Player 2</h4>
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a class="glightbox" data-especiales="images-especiales" href="assets/img/especiales/chunlirosa1.jpg"><img src="assets/img/especiales/chunlirosa1.jpg" class="img-fluid" alt="Chun Li frontal"></a></div>
          <div class="swiper-slide"><a class="glightbox" data-especiales="images-especiales" href="assets/img/especiales/chunlirosa2.jpg"><img src="assets/img/especiales/chunlirosa2.jpg" class="img-fluid" alt="Chun Li trasera"></a></div>
          <div class="swiper-slide"><a class="glightbox" data-especiales="images-especiales" href="assets/img/especiales/chunlirosa3.jpg"><img src="assets/img/especiales/chunlirosa3.jpg" class="img-fluid" alt="Chun Li dentro"></a></div>
          <div class="swiper-slide"><a class="glightbox" data-especiales="images-especiales" href="assets/img/especiales/chunlirosa4.jpg"><img src="assets/img/especiales/chunlirosa4.jpg" class="img-fluid" alt="Chun Li efecto 1"></a></div>
          <div class="swiper-slide"><a class="glightbox" data-especiales="images-especiales" href="assets/img/especiales/chunlirosa5.jpg"><img src="assets/img/especiales/chunlirosa5.jpg" class="img-fluid" alt="Chun Li efecto 2"></a></div>
          <div class="swiper-slide"><a class="glightbox" data-especiales="images-especiales" href="assets/img/especiales/chunlirosa6.jpg"><img src="assets/img/especiales/chunlirosa6.jpg" class="img-fluid" alt="Chun Li pose 1"></a></div>
          <div class="swiper-slide"><a class="glightbox" data-especiales="images-especiales" href="assets/img/especiales/chunlirosa7.jpg"><img src="assets/img/especiales/chunlirosa7.jpg" class="img-fluid" alt="Chun Li pose 2"></a></div>
        </div>
        <div class="swiper-button-next-especiales"></div> <!-- botón para siguiente -->
        <div class="swiper-button-prev-especiales"></div> <!-- botón para previo --> 
      </div>         
    </div>
  </div>
@endsection