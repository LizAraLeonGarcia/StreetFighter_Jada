 @extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <!-- ------------------------------------------------------ Contendor para título ------------------------------------------------------ -->
    <div class="section-title">
      <h3>Personajes exclusivos</h3>
    </div>
    <!-- -------------------------------------------------------------- Lista -------------------------------------------------------------- -->
    <div class="col-md-12">
      <ol class="menu-especiales">
        <li id="evilRyu" class="active">Evil Ryu</li>
        <li id="violentKen">Violent Ken</li>
        <li id="chunLiRosa">Chun Li Player 2</li>
        <li id="feiLongMorado"> Fei Long Player 2</li>
        <li id="mBisonVerde">M. Bison Player 2</li>
        <li id="dhalsimGris">Dhalsim Player 2</li>
      </ol>
    </div>
    <!-- ------------------------------------------------------ Contenedor personajes ------------------------------------------------------ -->
    <div class="especiales" id="especiales">
      <!-- ------------------------------------------------------------------------------------------------------------------------ Evil Ryu -->
      <div class="evilRyu-container especiales-container">
        <h4>Evil Ryu</h4>
        <!-- Contenedor principal con las miniaturas y la imagen grande -->
        <div class="main-container">
          <!-- Paginación de imágenes pequeñas a un lado -->
          <div id="image-pagination">
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu1.jpg" alt="Evil Ryu Frontal" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu1.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu2.jpg" alt="Evil Ryu Trasera" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu2.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu3.jpg" alt="Evil Ryu Lateral" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu3.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu4.jpg" alt="Evil Ryu Dentro" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu4.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu5.jpg" alt="Evil Ryu Efecto 1" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu5.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu6.jpg" alt="Evil Ryu Efecto 2" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu6.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu7.jpg" alt="Evil Ryu Pose 1" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu7.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/evilryu8.jpg" alt="Evil Ryu Pose 2" class="thumbnail-image" data-large-src="assets/img/especiales/evilryu8.jpg" />
            </div>
          </div>
          <!-- Imagen central grande -->
          <div id="active-image-container">
            <img id="active-image" src="assets/img/especiales/evilryu1.jpg" alt="Evil Ryu" class="especial-img" />
          </div>
        </div>
      </div> <!-- cierre Evil Ryu -->
      <!-- --------------------------------------------------------------------------------------------------------------------- Violent Ken -->
      <div class="violentKen-container especiales-container" style="display: none;">
        <h4>Violent Ken</h4>
        <!-- Contenedor principal con las miniaturas y la imagen grande -->
        <div class="main-container">
          <!-- Paginación de imágenes pequeñas a un lado -->
          <div id="image-pagination">
            <div class="image-thumbnail">
              <img src="assets/img/especiales/violentken1.jpg" alt="Violent Ken Frontal" class="thumbnail-image" data-large-src="assets/img/especiales/violentken1.jpg" />
            </div>
            <div clas="image-thumbnail">
              <img src="assets/img/especiales/violentken2.jpg" alt="Violent Ken Trasera" class="thumbnail-image" data-large-src="assets/img/especiales/violentken2.jpg" />
            </div>
            <div clas="image-thumbnail">
              <img src="assets/img/especiales/violentken3.jpg" alt="Violent Ken Lateral" class="thumbnail-image" data-large-src="assets/img/especiales/violentken3.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/violentken4.jpg" alt="Violent Ken Dentro" class="thumbnail-image" data-large-src="assets/img/especiales/violentken4.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/violentken5.jpg" alt="Violent Ken Efecto 1" class="thumbnail-image" data-large-src="assets/img/especiales/violentken5.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/violentken6.jpg" alt="Violent Ken Efecto 2" class="thumbnail-image" data-large-src="assets/img/especiales/violentken6.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/violentken7.jpg" alt="Violent Ken Pose 1" class="thumbnail-image" data-large-src="assets/img/especiales/violentken7.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/violentken8.jpg" alt="Violent Ken Pose 2" class="thumbnail-image" data-large-src="assets/img/especiales/violentken8.jpg" />
            </div>
          </div>
          <!-- Imagen central grande -->
          <div id="active-image-container">
            <img id="active-image" src="assets/img/especiales/violentken1.jpg" alt="Violent Ken" class="especial-img" />
          </div>
        </div> 
      </div> <!-- cierre Violent Ken -->
      <!-- ------------------------------------------------------------------------------------------------------------------------- Chun Li -->
      <div class="chunLiRosa-container especiales-container" style="display: none;">
        <h4>Chun Li Player 2</h4>
        <!-- Contenedor principal con las miniaturas y la imagen grande -->
        <div class="main-container">
          <!-- Paginación de imágenes pequeñas a un lado -->
          <div id="image-pagination">
            <div class="image-thumbnail">
              <img src="assets/img/especiales/chunlirosa1.jpg" alt="Chun Li Player 2 Frontal" class="thumbnail-image" data-large-src="assets/img/especiales/chunlirosa1.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/chunlirosa2.jpg" alt="Chun Li Player 2 Trasera" class="thumbnail-image" data-large-src="assets/img/especiales/chunlirosa2.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/chunlirosa3.jpg" alt="Chun Li Player 2 Lateral" class="thumbnail-image" data-large-src="assets/img/especiales/chunlirosa3.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/chunlirosa4.jpg" alt="Chun Li Player 2 Dentro" class="thumbnail-image" data-large-src="assets/img/especiales/chunlirosa4.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/chunlirosa5.jpg" alt="Chun Li Player 2 Efecto 1" class="thumbnail-image" data-large-src="assets/img/especiales/chunlirosa5.jpg" />
            </div>
            <div class="image-thumbanil">
              <img src="assets/img/especiales/chunlirosa6.jpg" alt="Chun Li Player 2 Efecto 2" class="thumbnail-image" data-large-src="assets/img/especiales/chunlirosa6.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/chunlirosa7.jpg" alt="Chun Li Player 2 Pose 1" class="thumbnail-image" data-large-src="assets/img/especiales/chunlirosa7.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/chunlirosa8.jpg" alt="Chun Li Player 2 Pose 2" class="thumbnail-image" data-large-src="assets/img/especiales/chunlirosa8.jpg" />
            </div>
          </div>
            <!-- Imagen central grande -->
          <div id="active-image-container">
            <img id="active-image" src="assets/img/especiales/chunlirosa1.jpg" alt="Chun Li Player 2" class="especial-img" />
          </div>
        </div>    
      </div> <!-- cierre Chun Li Player 2-->
      <!-- ------------------------------------------------------------------------------------------------------------------------- Chun Li -->
      <div class="feiLongMorado-container especiales-container" style="display: none;">
        <h4>Fei Long Player 2</h4>
        <!-- Contenedor principal con las miniaturas y la imagen grande -->
        <div class="main-container">
          <!-- Paginación de imágenes pequeñas a un lado -->
          <div id="image-pagination">
            <div class="image-thumbnail">
              <img src="assets/img/especiales/feilongmorado1.jpg" alt="Fei Long Player 2 Frontal" class="thumbnail-image" data-large-src="assets/img/especiales/feilongmorado1.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/feilongmorado2.jpg" alt="Fei Long Player 2 Trasera" class="thumbnail-image" data-large-src="assets/img/especiales/feilongmorado2.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/feilongmorado3.jpg" alt="Fei Long Player 2 Lateral" class="thumbnail-image" data-large-src="assets/img/especiales/feilongmorado3.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/feilongmorado4.jpg" alt="Fei Long Player 2 Dentro" class="thumbnail-image" data-large-src="assets/img/especiales/feilongmorado4.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/feilongmorado5.jpg" alt="Fei Long Player 2 Efecto" class="thumbnail-image" data-large-src="assets/img/especiales/feilongmorado5.jpg" />
            </div>
            <div class="image-thumbanil">
              <img src="assets/img/especiales/feilongmorado6.jpg" alt="Fei Long Player 2 Nunchakus" class="thumbnail-image" data-large-src="assets/img/especiales/feilongmorado6.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/feilongmorado7.jpg" alt="Fei Long Player 2 Pose 1" class="thumbnail-image" data-large-src="assets/img/especiales/feilongmorado7.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/feilongmorado8.jpg" alt="Fei Long Player 2 Pose 2" class="thumbnail-image" data-large-src="assets/img/especiales/feilongmorado8.jpg" />
            </div>
          </div>
            <!-- Imagen central grande -->
          <div id="active-image-container">
            <img id="active-image" src="assets/img/especiales/feilongmorado1.jpg" alt="Fei Long Player 2" class="especial-img" />
          </div>
        </div>    
      </div> <!-- cierre Fei Long Player 2 -->
      <!-- ---------------------------------------------------------------------------------------------------------------- M. Bison Player 2 -->
      <div class="mBisonVerde-container especiales-container" style="display: none;">
        <h4>M. Bison Player 2</h4>
        <div class="main-container">
          <div id="image-pagination">
            <div class="image-thumbnail">
              <img src="assets/img/especiales/mbisonverde1.jpg" alt="M. Bison Player 2 Frontal" class="thumbnail-image" data-large-src="assets/img/especiales/mbisonverde1.jpg" />
            </div>
            <div clas="image-thumbnail">
              <img src="assets/img/especiales/mbisonverde2.jpg" alt="M. Bison Player 2 Trasera" class="thumbnail-image" data-large-src="assets/img/especiales/mbisonverde2.jpg" />
            </div>
            <div clas="image-thumbnail">
              <img src="assets/img/especiales/mbisonverde3.jpg" alt="M. Bison Player 2 Lateral" class="thumbnail-image" data-large-src="assets/img/especiales/mbisonverde3.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/mbisonverde4.jpg" alt="M. Bison Player 2 Dentro" class="thumbnail-image" data-large-src="assets/img/especiales/mbisonverde4.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/mbisonverde5.jpg" alt="M. Bison Player 2 Efecto 1" class="thumbnail-image" data-large-src="assets/img/especiales/mbisonverde5.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/mbisonverde6.jpg" alt="M. Bison Player 2 Efecto 2" class="thumbnail-image" data-large-src="assets/img/especiales/mbisonverde6.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/mbisonverde7.jpg" alt="M. Bison Player 2 Pose 1" class="thumbnail-image" data-large-src="assets/img/especiales/mbisonverde7.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/mbisonverde8.jpg" alt="M. Bison Player 2 Pose 2" class="thumbnail-image" data-large-src="assets/img/especiales/mbisonverde8.jpg" />
            </div>
          </div>
          <div id="active-image-container">
            <img id="active-image" src="assets/img/especiales/mbisonverde1.jpg" alt="M. Bison Player 2" class="especial-img" />
          </div>
        </div> 
      </div> <!-- cierre M. Bison Player 2 -->
      <!-- ----------------------------------------------------------------------------------------------------------------- Dhalsim Player 2 -->
      <div class="dhalsimGris-container especiales-container" style="display: none;">
        <h4>Dhalsim Player 2</h4>
        <div class="main-container">
          <div id="image-pagination">
            <div class="image-thumbnail">
              <img src="assets/img/especiales/dhalsimmorado1.jpg" alt="Dhalsim Player 2 Frontal" class="thumbnail-image" data-large-src="assets/img/especiales/dhalsimmorado1.jpg" />
            </div>
            <div clas="image-thumbnail">
              <img src="assets/img/especiales/dhalsimmorado2.jpg" alt="Dhalsim Player 2 Trasera" class="thumbnail-image" data-large-src="assets/img/especiales/dhalsimmorado2.jpg" />
            </div>
            <div clas="image-thumbnail">
              <img src="assets/img/especiales/dhalsimmorado3.jpg" alt="Dhalsim Player 2 Lateral" class="thumbnail-image" data-large-src="assets/img/especiales/dhalsimmorado3.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/dhalsimmorado4.jpg" alt="Dhalsim Player 2 Dentro" class="thumbnail-image" data-large-src="assets/img/especiales/dhalsimmorado4.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/dhalsimmorado5.jpg" alt="Dhalsim Player 2 Efecto 1" class="thumbnail-image" data-large-src="assets/img/especiales/dhalsimmorado5.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/dhalsimmorado6.jpg" alt="Dhalsim Player 2 Efecto 2" class="thumbnail-image" data-large-src="assets/img/especiales/dhalsimmorado6.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/dhalsimmorado7.jpg" alt="Dhalsim Player 2 Pose 1" class="thumbnail-image" data-large-src="assets/img/especiales/dhalsimmorado7.jpg" />
            </div>
            <div class="image-thumbnail">
              <img src="assets/img/especiales/dhalsimmorado8.jpg" alt="Dhalsim Player 2 Pose 2" class="thumbnail-image" data-large-src="assets/img/especiales/dhalsimmorado8.jpg" />
            </div>
          </div>
          <div id="active-image-container">
            <img id="active-image" src="assets/img/especiales/dhalsimmorado1.jpg" alt="Dhalsim Player 2" class="especial-img" />
          </div>
        </div> 
      </div> <!-- cierre Dhalsim Player 2 --> 
    </div> <!-- Contenedor personajes -->
  </div> <!-- Contenedor general -->
@endsection