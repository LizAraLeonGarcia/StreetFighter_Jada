@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Sesión de fotos de mis figuras</h3>
    </div>
    <div class="menuGaleria">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" id="general-tab" data-bs-toggle="pill" href="#general">General</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="ejercicio-tab" data-bs-toggle="pill" href="#ejercicio">Ejercicio</a>
        </li>
      </ul>
    </div>
    <!-- ----------------------------------------------------- contenedor para galería ----------------------------------------------------- -->
    <div class="galeria">
      <div class="tab-content">
        <!-- Galería General -->
        <div class="tab-pane fade show active" id="general">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/1.jpg"><img src="assets/img/galeria/1.jpg" class="img-fluid" alt="Ryu y Chun Li 1"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/2.jpg"><img src="assets/img/galeria/2.jpg" class="img-fluid" alt="Ryu y Chun Li 2"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/3.jpg"><img src="assets/img/galeria/3.jpg" class="img-fluid" alt="Ryu y Chun Li 3"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/4.jpg"><img src="assets/img/galeria/4.jpg" class="img-fluid" alt="Ryu y Chun Li 4"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/5.jpg"><img src="assets/img/galeria/5.jpg" class="img-fluid" alt="Ryu y Chun Li 5"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/6.jpg"><img src="assets/img/galeria/6.jpg" class="img-fluid" alt="Ryu y Chun Li 6"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/8.jpg"><img src="assets/img/galeria/8.jpg" class="img-fluid" alt="Violent Ken y Ken Player 2"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/9.jpg"><img src="assets/img/galeria/9.jpg" class="img-fluid" alt="Dee Jay con una caja de cervezas"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/10.jpg"><img src="assets/img/galeria/10.jpg" class="img-fluid" alt="Waves 1,2,3"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/11.jpg"><img src="assets/img/galeria/11.jpg" class="img-fluid" alt="13 figuras"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/12.jpg"><img src="assets/img/galeria/12.jpg" class="img-fluid" alt="16 figuras"></a></div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <!-- Ejercicio -->
        <div class="tab-pane fade" id="ejercicio">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/guile y cammy 1.jpg"><img src="assets/img/galeria/guile y cammy 1.jpg" class="img-fluid" alt="Guile haciendo ejercicio"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/guile y cammy 2.jpg"><img src="assets/img/galeria/guile y cammy 2.jpg" class="img-fluid" alt="Cammy haciendo hip thrust"></a></div>
              <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/guile y cammy 3.jpg"><img src="assets/img/galeria/guile y cammy 3.jpg" class="img-fluid" alt="Cammy haciendo desplante con barra"></a></div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
@endsection