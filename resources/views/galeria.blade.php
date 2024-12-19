@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Sesión de fotos de mis figuras</h3>
    </div>
    <!-- ----------------------------------------------------- contenedor para galería ----------------------------------------------------- -->
    <div class="galeria">
      <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/1.jpg"><img src="assets/img/galeria/1.jpg" class="img-fluid" alt="1"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/2.jpg"><img src="assets/img/galeria/2.jpg" class="img-fluid" alt="2"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/3.jpg"><img src="assets/img/galeria/3.jpg" class="img-fluid" alt="3"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/4.jpg"><img src="assets/img/galeria/4.jpg" class="img-fluid" alt="4"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/5.jpg"><img src="assets/img/galeria/5.jpg" class="img-fluid" alt="5"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/6.jpg"><img src="assets/img/galeria/6.jpg" class="img-fluid" alt="6"></a></div>
            <div class="swiper-slide"><a class="glightbox" data-galeria="images-galeria" href="assets/img/galeria/7.jpg"><img src="assets/img/galeria/7.jpg" class="img-fluid" alt="7"></a></div>
          </div>
        <div class="swiper-button-next"></div> <!-- botón para siguiente -->
        <div class="swiper-button-prev"></div> <!-- botón para previo -->
        <div class="swiper-pagination"></div>  <!-- botón para paginación -->
      </div>
    </div>
  </div>
@endsection