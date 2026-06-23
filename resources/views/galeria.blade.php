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
          <a class="nav-link" id="familia-tab" data-bs-toggle="pill" href="#familia">Particular</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="ejercicio-tab" data-bs-toggle="pill" href="#ejercicio">Ejercicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Chun Li x ¿...?</a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" id="chunlixvega-tab" data-bs-toggle="pill" href="#chunlixvega">Chun Li x Vega</a>
            </li>
            <li>
              <a class="dropdown-item" id="chunlixryu-tab" data-bs-toggle="pill" href="#chunlixryu">Chun Li x Ryu</a>
            </li>
            <li>
              <a class="dropdown-item" id="chunlixsagat-tab" data-bs-toggle="pill" href="#chunlixsagat">Chun Li x Sagat</a>
            </li>
            <li>
              <a class="dropdown-item" id="chunlixken-tab" data-bs-toggle="pill" href="#chunlixken">Chun Li x Ken</a>
            </li>
            <li>
              <a class="dropdown-item" id="chunlixmbison-tab" data-bs-toggle="pill" href="#chunlixmbison">Chun Li x M. Bison</a>
            </li>
            <li>
              <a class="dropdown-item" id="chunlixblanka-tab" data-bs-toggle="pill" href="#chunlixblanka">Chun Li x Blanka</a>
            </li>
            <li>
              <a class="dropdown-item" id="chunlixakuma-tab" data-bs-toggle="pill" href="#chunlixakuma">Chun Li x Akuma</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- -------------------------------------------------------- contenedor galería -------------------------------------------------------- -->
    <div class="galeria">
      <div class="tab-content">
        <!-- ---------------------------------------------------------------------------------------------------------------------- General ---->
        <div class="tab-pane fade show active" id="general">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/1.jpg"><img src="assets/img/galeria/1.jpg" alt="Ryu y Chun Li 1"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/2.jpg"><img src="assets/img/galeria/2.jpg" alt="Ryu y Chun Li 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/3.jpg"><img src="assets/img/galeria/3.jpg" alt="Ryu y Chun Li 3"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/4.jpg"><img src="assets/img/galeria/4.jpg" alt="Ryu y Chun Li 4"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/5.jpg"><img src="assets/img/galeria/5.jpg" alt="Ryu y Chun Li 5"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/6.jpg"><img src="assets/img/galeria/6.jpg" alt="Ryu y Chun Li 6"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunli2.jpg"><img src="assets/img/galeria/chunli2.jpg" alt="Chun Li y Chun Li Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/cammy2.jpg"><img src="assets/img/galeria/cammy2.jpg" alt="Cammy y Cammy Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/guile2.jpg"><img src="assets/img/galeria/guile2.jpg" alt="Guile y Guile Player 2"></a></div>
            <!--  <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/dhalsim2.jpg"><img src="assets/img/galeria/dhalsim2.jpg" alt="Dhalsim y Dhalsim Player 2"></a></div> -->
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ryu2.jpg"><img src="assets/img/galeria/ryu2.jpg" alt="Ryu y Ryu Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ken2.jpg"><img src="assets/img/galeria/ken2.jpg" alt="Ken y Ken Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/mbison2.jpg"><img src="assets/img/galeria/mbison2.jpg" alt="M. Bison y M. Bison Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/feilong2.jpg"><img src="assets/img/galeria/feilong2.jpg" alt="Fei Long y Fei Long Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunli3.jpg"><img src="assets/img/galeria/chunli3.jpg" alt="Chun Li, Chun Li Red y Chun Li Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ryu3.jpg"><img src="assets/img/galeria/ryu3.jpg" alt="Ryu, Evil Ryu y Ryu Player 2"></a></div>
            <!--  <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/mbison3.jpg"><img src="assets/img/galeria/mbison3.jpg" alt="M. Bison, M. Bison verde y M. Bison azul"></a></div> -->
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/ken3.jpg"><img src="assets/img/galeria/ken3.jpg" alt="Ken, Violent Ken y Ken Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/x1.jpg"><img src="assets/img/galeria/x1.jpg" alt="Reyes de Shadaloo"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/x2.jpg"><img src="assets/img/galeria/x2.jpg" alt="Reyes de Shadaloo poderes"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/z1.jpg"><img src="assets/img/galeria/z1.jpg" alt="Waves 1,2,3"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/z2.jpg"><img src="assets/img/galeria/z2.jpg" alt="13 figuras"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/z3.jpg"><img src="assets/img/galeria/z3.jpg" alt="16 figuras"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/z4.jpg"><img src="assets/img/galeria/z4.jpg" alt="21 figuras"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/z5.jpg"><img src="assets/img/galeria/z5.jpg" alt="25 figuras"></a></div>
            <!--  <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/z6.jpg"><img src="assets/img/galeria/z6.jpg" alt="27 figuras"></a></div> -->
            </div> <!-- fin swiper-wrapper -->
          </div>
        </div> <!-- fin general -->
        <!-- ---------------------------------------------------------------------------------------------------------------------- Familia ---->
        <div class="tab-pan fade" id="familia">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/familia/1.jpg"><img src="assets/img/galeria/familia/1.jpg" class="img-fluid" alt="Familia"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/familia/2.jpg"><img src="assets/img/galeria/familia/2.jpg" class="img-fluid" alt="Familia"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/familia/3.jpg"><img src="assets/img/galeria/familia/3.jpg" class="img-fluid" alt="Familia"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/familia/4.jpg"><img src="assets/img/galeria/familia/4.jpg" class="img-fluid" alt="Familia"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/familia/5.jpg"><img src="assets/img/galeria/familia/5.jpg" class="img-fluid" alt="Familia"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/familia/6.jpg"><img src="assets/img/galeria/familia/6.jpg" class="img-fluid" alt="Familia"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/familia/7.jpg"><img src="assets/img/galeria/familia/7.jpg" class="img-fluid" alt="Familia"></a></div>
            </div>
            <div class="swiper-controls">
              <div class="swiper-nav-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div>
          </div>
        </div> <!-- fin familia -->
        <!-- -------------------------------------------------------------------------------------------------------------------- Ejercicio ---->
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
            <div class="swiper-controls">
              <div class="swiper-nav-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div>
          </div>
        </div> <!-- fin ejercicio -->
        <!-- ----------------------------------------------------------------------------------------------------------------- Chun Li x Vega -->
        <div class="tab-pane fade" id="chunlixvega">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/1.jpg"><img src="assets/img/galeria/chunlixvega/1.jpg" alt="Vega x Chun Li Player 2 en brazos"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/2.jpg"><img src="assets/img/galeria/chunlixvega/2.jpg" alt="Vega x Chun Li Player 2 en su espalda"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/3.jpg"><img src="assets/img/galeria/chunlixvega/3.jpg" alt="Vega x Chun Li PLayer en su bicep"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/4.jpg"><img src="assets/img/galeria/chunlixvega/4.jpg" alt="Vega x Chun Li abrazados"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/5.jpg"><img src="assets/img/galeria/chunlixvega/5.jpg" alt="Vega x Chun Li secuestrada"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/6.jpg"><img src="assets/img/galeria/chunlixvega/6.jpg" alt="Vega x Chun Li en el bicep de Blanka"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/7.jpg"><img src="assets/img/galeria/chunlixvega/7.jpg" alt="Vega x Chun Li tomada de la mano"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/8.jpg"><img src="assets/img/galeria/chunlixvega/8.jpg" alt="Vega x Chun Li PLayer en su bicep"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/9.jpg"><img src="assets/img/galeria/chunlixvega/9.jpg" alt="Vega x Chun Li abrazados"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/10.jpg"><img src="assets/img/galeria/chunlixvega/10.jpg" alt="Vega x Chun Li secuestrada"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/11.jpg"><img src="assets/img/galeria/chunlixvega/11.jpg" alt="Vega x Chun Li en el bicep de Blanka"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixvega/12.jpg"><img src="assets/img/galeria/chunlixvega/12.jpg" alt="Vega x Chun Li tomada de la mano"></a></div>
            </div>
            <div class="swiper-controls">
              <div class="swiper-nav-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div>
          </div>
        </div> <!-- fin con vega -->
        <!-- ------------------------------------------------------------------------------------------------------------------ Chun Li x Ryu -->
        <div class="tab-pane fade" id="chunlixryu">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/1.jpg"><img src="assets/img/galeria/chunlixryu/1.jpg" alt="Ryu cargando a Chun Li en brazos"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/2.jpg"><img src="assets/img/galeria/chunlixryu/2.jpg" alt="Ryu cargando a Chun Li en su espalda"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/3.jpg"><img src="assets/img/galeria/chunlixryu/3.jpg" alt="Ryu y Chun Li bailando"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/4.jpg"><img src="assets/img/galeria/chunlixryu/4.jpg" alt="Ryu Player 2 y Chun Li Player 2 abrazados"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/5.jpg"><img src="assets/img/galeria/chunlixryu/5.jpg" alt="Ryu Player 2 y Chun Li Player 2 en sus hombros"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/6.jpg"><img src="assets/img/galeria/chunlixryu/6.jpg" alt="Ryu Player 2 y Chun Li Player 2 abrazados bien pegaditos"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/7.jpg"><img src="assets/img/galeria/chunlixryu/7.jpg" alt="Evil Ryu y Chun Li Red acorralada"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/8.jpg"><img src="assets/img/galeria/chunlixryu/8.jpg" alt="Evil Ryu y Chun Li Red tomada de la mano"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/9.jpg"><img src="assets/img/galeria/chunlixryu/9.jpg" alt="Evil Ryu y Chun Li Red secuestrada"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixryu/moto azul.jpg"><img src="assets/img/galeria/chunlixryu/moto azul.jpg" alt="Ryu Player 2 x Chun Li en moto azul"></a></div>
            </div>
            <div class="swiper-controls">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div> <!-- fin con ryu -->
        <!-- ---------------------------------------------------------------------------------------------------------------- Chun Li x Sagat -->
        <div class="tab-pane fade" id="chunlixsagat">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixsagat/1.jpg"><img src="assets/img/galeria/chunlixsagat/1.jpg" alt="Sagat x Chun Li Red en brazos"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixsagat/2.jpg"><img src="assets/img/galeria/chunlixsagat/2.jpg" alt="Sagat x Chun Li Red en sus hombros"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixsagat/3.jpg"><img src="assets/img/galeria/chunlixsagat/3.jpg" alt="Sagat x Chun Li Red en su bicep"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixsagat/4.jpg"><img src="assets/img/galeria/chunlixsagat/4.jpg" alt="Sagat x Chun Li abrazados"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixsagat/5.jpg"><img src="assets/img/galeria/chunlixsagat/5.jpg" alt="Sagat x Chun Li Red secuestrada"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixsagat/6.jpg"><img src="assets/img/galeria/chunlixsagat/6.jpg" alt="Sagat x Chun Li Red mirándose"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixsagat/7.jpg"><img src="assets/img/galeria/chunlixsagat/7.jpg" alt="Sagat x Chun Li Red tomada de los hombros"></a></div>
            </div>
            <div class="swiper-controls">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div> <!-- fin con sagat -->
        <!-- ------------------------------------------------------------------------------------------------------------------ Chun Li x Ken -->
        <div class="tab-pane fade" id="chunlixken">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/1.jpg"><img src="assets/img/galeria/chunlixken/1.jpg" alt="Ken cargando a Chun Li Red en brazos"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/2.jpg"><img src="assets/img/galeria/chunlixken/2.jpg" alt="Ken cargando a Chun Li Red en su espalda"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/3.jpg"><img src="assets/img/galeria/chunlixken/3.jpg" alt="Ken y Chun Li Red bailando"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/4.jpg"><img src="assets/img/galeria/chunlixken/4.jpg" alt="Ken Player 2 y Chun Li Player 2 abrazados"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/5.jpg"><img src="assets/img/galeria/chunlixken/5.jpg" alt="Ken Player 2 y Chun Li Player 2 en sus hombros"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/6.jpg"><img src="assets/img/galeria/chunlixken/6.jpg" alt="Ken Player 2 y Chun Li Player 2 abrazados bien pegaditos"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/7.jpg"><img src="assets/img/galeria/chunlixken/7.jpg" alt="Violent Ken y Chun Li acorralada"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/8.jpg"><img src="assets/img/galeria/chunlixken/8.jpg" alt="Violent Ken y Chun Li tomada de la mano"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/9.jpg"><img src="assets/img/galeria/chunlixken/9.jpg" alt="Violent Ken y Chun Li secuestrada"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixken/moto roja.jpg"><img src="assets/img/galeria/chunlixken/moto roja.jpg" alt="Ken x Chun Li Red en moto roja"></a></div>
            </div>
            <div class="swiper-controls">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div> <!-- fin con ken -->
        <!-- --------------------------------------------------------------------------------------------------------------- Chun Li x Blanka -->
        <div class="tab-pane fade" id="chunlixblanka">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixblanka/1.jpg"><img src="assets/img/galeria/chunlixblanka/1.jpg" alt="Blanka x Chun Li Player 2 en brazos"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixblanka/2.jpg"><img src="assets/img/galeria/chunlixblanka/2.jpg" alt="Blanka x Chun Li Player 2 en su espalda"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixblanka/3.jpg"><img src="assets/img/galeria/chunlixblanka/3.jpg" alt="Blanka x Chun Li PLayer en su bicep"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixblanka/4.jpg"><img src="assets/img/galeria/chunlixblanka/4.jpg" alt="Blanka x Chun Li abrazados"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixblanka/5.jpg"><img src="assets/img/galeria/chunlixblanka/5.jpg" alt="Blanka x Chun Li secuestrada"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixblanka/6.jpg"><img src="assets/img/galeria/chunlixblanka/6.jpg" alt="Blanka x Chun Li en el bicep de Blanka"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixblanka/7.jpg"><img src="assets/img/galeria/chunlixblanka/7.jpg" alt="Blanka x Chun Li tomada de la mano"></a></div>
            </div>
            <div class="swiper-controls">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div> <!-- fin con blanka -->
        <!-- ------------------------------------------------------------------------------------------------------------- Chun Li x M. Bison -->
        <div class="tab-pane fade" id="chunlixmbison">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/1.jpg"><img src="assets/img/galeria/chunlixmbison/1.jpg" alt="M. Bison x Chun Li Red"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/2.jpg"><img src="assets/img/galeria/chunlixmbison/2.jpg" alt="M. Bison x Chun Li Red y Chun Li"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/3.jpg"><img src="assets/img/galeria/chunlixmbison/3.jpg" alt="M. Bison x Chun Li"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/4.jpg"><img src="assets/img/galeria/chunlixmbison/4.jpg" alt="M. Bison Player 2 x Chun Li"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/5.jpg"><img src="assets/img/galeria/chunlixmbison/5.jpg" alt="M. Bison Player 2 x Chun Li y Chun Li Red"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/6.jpg"><img src="assets/img/galeria/chunlixmbison/6.jpg" alt="M. Bison Player 2 x Chun Li Red"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/7.jpg"><img src="assets/img/galeria/chunlixmbison/7.jpg" alt="M. Bison x Chun Li Player 2 y M. Bison Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/8.jpg"><img src="assets/img/galeria/chunlixmbison/8.jpg" alt="Chun Li Player 2 x M. Bison y M. Bison Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixmbison/9.jpg"><img src="assets/img/galeria/chunlixmbison/9.jpg" alt="M. Bison Player 2 x Chun Li Player 2 y M. Bison"></a></div>
            </div>
            <div class="swiper-controls">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div> <!-- fin con m. bison -->
        <!-- ---------------------------------------------------------------------------------------------------------------- Chun Li x Akuma -->
    <!--<div class="tab-pane fade" id="chunlixakuma">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixakuma/1.jpg"><img src="assets/img/galeria/chunlixakuma/1.jpg" alt="M. Bison x Chun Li Red"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixakuma/2.jpg"><img src="assets/img/galeria/chunlixakuma/2.jpg" alt="M. Bison x Chun Li Red y Chun Li"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixakuma/3.jpg"><img src="assets/img/galeria/chunlixakuma/3.jpg" alt="M. Bison x Chun Li"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixakuma/4.jpg"><img src="assets/img/galeria/chunlixakuma/4.jpg" alt="M. Bison Player 2 x Chun Li"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixakuma/5.jpg"><img src="assets/img/galeria/chunlixakuma/5.jpg" alt="M. Bison Player 2 x Chun Li y Chun Li Red"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixakuma/6.jpg"><img src="assets/img/galeria/chunlixakuma/6.jpg" alt="M. Bison Player 2 x Chun Li Red"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixakuma/7.jpg"><img src="assets/img/galeria/chunlixakuma/7.jpg" alt="M. Bison x Chun Li Player 2 y M. Bison Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixakuma/8.jpg"><img src="assets/img/galeria/chunlixakuma/8.jpg" alt="Chun Li Player 2 x M. Bison y M. Bison Player 2"></a></div>
              <div class="swiper-slide"><a data-galeria="images-galeria" href="assets/img/galeria/chunlixakuma/9.jpg"><img src="assets/img/galeria/chunlixakuma/9.jpg" alt="M. Bison Player 2 x Chun Li Player 2 y M. Bison"></a></div>
            </div>
            <div class="swiper-controls">
              <div class="swiper-nav-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div>
          </div>
        </div>fin con akuma -->
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script src="{{ asset('js/swiper-init.js') }}"></script>
@endsection