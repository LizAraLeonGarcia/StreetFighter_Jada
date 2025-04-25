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
        <li class="nav-item">
          <a class="nav-link" id="chunlixvega-tab" data-bs-toggle="pill" href="#chunlixvega">Chun Li x Vega</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chunlixryu-tab" data-bs-toggle="pill" href="#chunlixryu">Chun Li x Ryu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chunlixsagat-tab" data-bs-toggle="pill" href="#chunlixsagat">Chun Li x Sagat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chunlixken-tab" data-bs-toggle="pill" href="#chunlixken">Chun Li x Ken</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chunlixmbison-tab" data-bs-toggle="pill" href="#chunlixmbison">Chun Li x M. Bison</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chunlixblanka-tab" data-bs-toggle="pill" href="#chunlixblanka">Chun Li x Blanka</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chunlixakuma-tab" data-bs-toggle="pill" href="#chunlixakuma">Chun Li x Akuma</a>
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
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/1.jpg"><img src="assets/img/galeria/1.jpg" alt="Ryu y Chun Li 1"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/2.jpg"><img src="assets/img/galeria/2.jpg" alt="Ryu y Chun Li 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/3.jpg"><img src="assets/img/galeria/3.jpg" alt="Ryu y Chun Li 3"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/4.jpg"><img src="assets/img/galeria/4.jpg" alt="Ryu y Chun Li 4"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/5.jpg"><img src="assets/img/galeria/5.jpg" alt="Ryu y Chun Li 5"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/6.jpg"><img src="assets/img/galeria/6.jpg" alt="Ryu y Chun Li 6"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/7.jpg"><img src="assets/img/galeria/7.jpg" alt="Ryu y Ryu Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/9.jpg"><img src="assets/img/galeria/9.jpg" alt="Chun Li y Chun Li Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/10.jpg"><img src="assets/img/galeria/10.jpg" alt="Ken y Ken Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/12.jpg"><img src="assets/img/galeria/12.jpg" alt="M. Bison y M. Bison Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/13.jpg"><img src="assets/img/galeria/13.jpg" alt="Guile y Guile Player 2"></a></div>
              <!--<div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/11.jpg"><img src="assets/img/galeria/11.jpg" alt="Dhalsim y Dhalsim Player 2"></a></div>-->
              <!--<div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/14.jpg"><img src="assets/img/galeria/14.jpg" alt="Cammy y Cammy Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/15.jpg"><img src="assets/img/galeria/15.jpg" alt="Dee Jay y Dee Jay Player 2"></a></div>-->
              <!--<div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/8.jpg"><img src="assets/img/galeria/8.jpg" alt="Fei Long y Fei Long Player 2"></a></div>-->
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/x.jpg"><img src="assets/img/galeria/x.jpg" alt="Dee Jay con una caja de cervezas"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/y1.jpg"><img src="assets/img/galeria/y1.jpg" alt="Chun Li Player 2 con Evil Ryu y Violent Ken"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/y2.jpg"><img src="assets/img/galeria/y2.jpg" alt="Chun Li Player 2 con Ryu y Ken Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/y3.jpg"><img src="assets/img/galeria/y3.jpg" alt="Chun Li Player 2 con Ryu Player 2 y Ken"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/z1.jpg"><img src="assets/img/galeria/z1.jpg" alt="Waves 1,2,3"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/z2.jpg"><img src="assets/img/galeria/z2.jpg" alt="13 figuras"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/z3.jpg"><img src="assets/img/galeria/z3.jpg" alt="16 figuras"></a></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <!-- Ejercicio -->
        <div class="tab-pane fade" id="ejercicio">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ejercicio/guile y cammy 1.jpg"><img src="assets/img/galeria/ejercicio/guile y cammy 1.jpg" class="img-fluid" alt="Guile haciendo ejercicio"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ejercicio/guile y cammy 2.jpg"><img src="assets/img/galeria/ejercicio/guile y cammy 2.jpg" class="img-fluid" alt="Cammy haciendo hip thrust"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ejercicio/guile y cammy 3.jpg"><img src="assets/img/galeria/ejercicio/guile y cammy 3.jpg" class="img-fluid" alt="Cammy haciendo desplante con barra"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ejercicio/chun li rosa entrenando 1.jpg"><img src="assets/img/galeria/ejercicio/chun li rosa entrenando 1.jpg" class="img-fluid" alt="Chun Li haciendo sentadilla con barra"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ejercicio/chun li rosa entrenando 2.jpg"><img src="assets/img/galeria/ejercicio/chun li rosa entrenando 2.jpg" class="img-fluid" alt="Chun Li haciendo desplante con barra"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ejercicio/chun li rosa entrenando 3.jpg"><img src="assets/img/galeria/ejercicio/chun li rosa entrenando 3.jpg" class="img-fluid" alt="Chun Li haciendo hip thrust con barra"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ejercicio/ryu gris entrenando.jpg"><img src="assets/img/galeria/ejercicio/ryu gris entrenando.jpg" class="img-fluid" alt="Ryu Player 2 entrenando"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ejercicio/ken entrenando.jpg"><img src="assets/img/galeria/ejercicio/ken entrenando.jpg" class="img-fluid" alt="Ken entrenando"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ejercicio/chun li ryu y ken.jpg"><img src="assets/img/galeria/ejercicio/chun li ryu y ken.jpg" class="img-fluid" alt="Chun Li, Ryu y Ken Player 2"></a></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <!-- Chun Li x Ryu -->
        <div class="tab-pane fade" id="chunlixryu">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/1.jpg"><img src="assets/img/galeria/chunlixryu/1.jpg" alt="Ryu cargando a Chun Li en brazos"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/2.jpg"><img src="assets/img/galeria/chunlixryu/2.jpg" alt="Ryu cargando a Chun Li en su espalda"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/3.jpg"><img src="assets/img/galeria/chunlixryu/3.jpg" alt="Ryu y Chun Li bailando"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/moto azul.jpg"><img src="assets/img/galeria/chunlixryu/moto azul.jpg" alt="Ryu Player 2 x Chun Li en moto azul"></a></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <!-- Chun Li x Ken -->
        <div class="tab-pane fade" id="chunlixken">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/1.jpg"><img src="assets/img/galeria/chunlixken/1.jpg" alt="Ken cargando a Chun Li en brazos"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/2.jpg"><img src="assets/img/galeria/chunlixken/2.jpg" alt="Ken cargando a Chun Li en su espalda"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/3.jpg"><img src="assets/img/galeria/chunlixken/3.jpg" alt="Ken y Chun Li bailando"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/moto roja.jpg"><img src="assets/img/galeria/chunlixken/moto roja.jpg" alt="Ken x Chun Li Red en moto roja"></a></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <!-- Chun Li x M. Bison -->
        <div class="tab-pane fade" id="chunlixmbison">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/m bison y chun li azul.jpg"><img src="assets/img/galeria/chunlixmbison/m bison y chun li azul.jpg" alt="M. Bison Player 2 x Chun Li"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/m bison y chun li roja.jpg"><img src="assets/img/galeria/chunlixmbison/m bison y chun li roja.jpg" alt="M. Bison x Chun Li Red"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/m bison y chun lis.jpg"><img src="assets/img/galeria/chunlixmbison/m bison y chun lis.jpg" alt="M. Bison Player 2 x Chun Li y Chun Li Red"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/4.jpg"><img src="assets/img/galeria/chunlixmbison/4.jpg" alt="M. Bison x Chun Li y Chun Li Red"></a></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection