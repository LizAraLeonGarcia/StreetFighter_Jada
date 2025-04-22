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
        <li id="feilongmorado"> Fei Long Player 2</li>
      </ol>
    </div>
    <!-- ------------------------------------------------------ Contenedor personajes ------------------------------------------------------ -->
    <div class="especiales" id="especiales">
      <!-- ------------------------------------------------------------------------------------------------------------------------ Evil Ryu -->
      <div class="evilryu-container especiales-container">
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
      </div>
      <!-- --------------------------------------------------------------------------------------------------------------------- Violent Ken -->
      <div class="violentken-container especiales-container" style="display: none;">
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
      </div>
      <!-- ------------------------------------------------------------------------------------------------------------------------- Chun Li -->
      <div class="chunlirosa-container especiales-container" style="display: none;">
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
      </div> 
      <!-- ------------------------------------------------------------------------------------------------------------------------- Chun Li -->
      <div class="feilongmorado-container especiales-container" style="display: none;">
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
      </div>     
    </div> <!-- Contenedor personajes -->
  </div> <!-- Contenedor general -->
@endsection