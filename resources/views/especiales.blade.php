@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ Contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes exclusivos de la SDCC</h3>
    </div>
    <!-- -------------------------------------------------------------- Lista -------------------------------------------------------------- -->
    <div class="col-md-12">
      <ol>
        <li id="evilryu" class="active">Evil Ryu</li>
        <li id="violentken">Violent Ken</li>
        <li id="chunlirosa">Chun Li Player 2</li>
      </ol>
    </div>
    <!-- ------------------------------------------------------ Contenedor personajes ------------------------------------------------------ -->
    <div class="especiales" id="especiales">
      <!-- ------------------------------------------------------------------------------------------------------------------------ Evil Ryu -->
      <!-- ------------------------------------------------------------------------------------------------------------------------ Evil Ryu -->
      <div class="evilryu-container especiales-container">
        <h4>Evil Ryu</h4>

        <!-- Contenedor principal con las miniaturas y la imagen grande -->
        <div class="main-container">
          <!-- Paginación de imágenes pequeñas a un lado -->
          <div id="image-pagination">
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu1.jpg" alt="Evil Ryu 1" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu1.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu2.jpg" alt="Evil Ryu 2" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu2.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu3.jpg" alt="Evil Ryu 3" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu3.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu4.jpg" alt="Evil Ryu 4" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu4.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu5.jpg" alt="Evil Ryu 5" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu5.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu6.jpg" alt="Evil Ryu 6" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu6.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu7.jpg" alt="Evil Ryu 7" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu7.jpg" />
            </div>
          </div>
          <!-- Imagen central grande -->
          <div id="active-image-container">
            <img id="active-image" src="assets/img/especiales/evilryu1.jpg" alt="Evil Ryu" class="especial-img" />
          </div>
        </div>
      </div>
      <!-- --------------------------------------------------------------------------------------------------------------------- Violent Ken -->
      <div class="violentken-container especiales-container" style="display: none;">
        <h4>Violent Ken</h4>
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a href="assets/img/especiales/violentken1.jpg"><img src="assets/img/especiales/violentken1.jpg" class="especial-img" alt="Violent Ken frontal"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/violentken2.jpg"><img src="assets/img/especiales/violentken2.jpg" class="especial-img" alt="Violent Ken trasera"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/violentken3.jpg"><img src="assets/img/especiales/violentken3.jpg" class="especial-img" alt="Violent Ken dentro"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/violentken4.jpg"><img src="assets/img/especiales/violentken4.jpg" class="especial-img" alt="Violent Ken efecto 1"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/violentken5.jpg"><img src="assets/img/especiales/violentken5.jpg" class="especial-img" alt="Violent Ken efecto 2"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/violentken6.jpg"><img src="assets/img/especiales/violentken6.jpg" class="especial-img" alt="Violent Ken pose 1"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/violentken7.jpg"><img src="assets/img/especiales/violentken7.jpg" class="especial-img" alt="Violent Ken pose 2"></a></div>
        </div> 
      </div>
      <!-- ------------------------------------------------------------------------------------------------------------------------- Chun Li -->
      <div class="chunlirosa-container especiales-container" style="display: none;">
        <h4>Chun Li Player 2</h4>
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a href="assets/img/especiales/chunlirosa1.jpg"><img src="assets/img/especiales/chunlirosa1.jpg" class="especial-img" alt="Chun Li frontal"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/chunlirosa2.jpg"><img src="assets/img/especiales/chunlirosa2.jpg" class="especial-img" alt="Chun Li trasera"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/chunlirosa3.jpg"><img src="assets/img/especiales/chunlirosa3.jpg" class="especial-img" alt="Chun Li dentro"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/chunlirosa4.jpg"><img src="assets/img/especiales/chunlirosa4.jpg" class="especial-img" alt="Chun Li efecto 1"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/chunlirosa5.jpg"><img src="assets/img/especiales/chunlirosa5.jpg" class="especial-img" alt="Chun Li efecto 2"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/chunlirosa6.jpg"><img src="assets/img/especiales/chunlirosa6.jpg" class="especial-img" alt="Chun Li pose 1"></a></div>
          <div class="swiper-slide"><a href="assets/img/especiales/chunlirosa7.jpg"><img src="assets/img/especiales/chunlirosa7.jpg" class="especial-img" alt="Chun Li pose 2"></a></div>
        </div>
      </div>         
    </div> <!-- Contenedor personajes -->
  </div> <!-- Contenedor general -->
@endsection