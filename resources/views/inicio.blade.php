@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- ------------------------------------------------------ Sección de título ------------------------------------------------------ -->
        <div class="section-title-INICIO">
            <h1>Street Fighter<h1>
            <h2>En esta página te muestro mi colección de Street Fighter: Jada Toys</h2>
            <h4>La marca Jada Toys está creciendo velozmente al ofrecer productos de esta saga tan conocida a un precio accesible y con excelente calidad...</h4>
        </div>
        <!-- ----------------------------------------------------- Sección de contenido ----------------------------------------------------- -->
        <div class="inicio" id="inicio">
            <!-- ---------------------------------------------------------------------------------------------- Primera sección: Presentación -->
            <div class="row mb-4">
                <div class="col-md-5">
                    <p>Esta colección de la marca Jada Toys comenzó por octubre del 2023. Aunque las fechas de las entregas, tanto de las waves como de los personajes varían mucho entre países, llegando generalmente a Europa, Asia y Estados Unidos antes que en mi país México, siempre es a precios razonables y con una gran calidad en el producto dándole ya guerra a otras marcas como SH Figuarts.</p>
                    <p>Las entregas se hacen en waves, grupos, de a 3 personajes, siempre siendo los mismos a nivel mundial, además hay persoanjes que son "especiales", pues salen en la Convención Internacional de Cómics de San Diego; también conocida como Comic-Con San Diego y abreviada en inglés por SDCC. Asimismo hay variantes de los personajes que poco van saliendo y se consiguen en aplicaciones como Aliexpress, Mercado Libre o Amazon, por mencionar algunas.
                    <p>Yo te mostraré mi colección en esta página como ya viste en uno de los títulos, son fotos que les tomé conforme iba consiguiendo a los personajes, a excepción de esta sección <strong>Inicio</strong> que tomé imágenes de google.</p>
                    <p>Decidí dividirlos en secciones, donde:</p>
                    <ul>
                        <li> <strong>Inicio</strong> que incluye una breve introducción sobre la colección.</li>
                        <li> <strong>Personajes</strong> incluye a los personajes que sacaron en las waves.</li>
                        <li> <strong>Especiales</strong> incluye a los personajes exclusivos de la SDCC.</li>
                        <li> <strong>Variantes</strong> incluye a los personajes que tienen un cambio de color y no fueron exclusivos de la SDCC.</li>
                        <li> <strong>Galería</strong> donde son fotografías que yo tomé de los personajes usando mi imaginación.</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <img src="assets/img/inicio/personajes.jpg" class="img-fluid" alt="Algunos de los personajes de la colección">
                </div>
            </div> <!-- fin primera sección -->
            <!-- --------------------------------------------------------------------------------------- Segunda sección: Tablas de las waves -->
            <div class="row mb-4">
                <div class="col-md-2">
                    <div class="table-responsive wave1">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr> <th>Wave 1 <br> <span class="subtitulo">primavera 2023</span> </th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td class="col1">Ryu</td> </tr>
                                <tr> <td class="col2">Fei Long</td> </tr>
                                <tr> <td class="col3">Chun Li</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="table-responsive wave2">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr> <th>Wave 2 <br> <span class="subtitulo">primavera 2024</span> </th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td class="col4">Ken</td> </tr>
                                <tr> <td class="col5">Dhalsim</td> </tr>
                                <tr> <td class="col6">M. Bison</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="table-responsive wave3">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr> <th>Wave 3 <br> <span class="subtitulo">Otoño 2024</span> </th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td class="col7">Guile</td> </tr>
                                <tr> <td class="col8">Dee Jay</td> </tr>
                                <tr> <td class="col9">Cammy</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="table-responsive wave4">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr> <th>Wave 4 <br> <span class="subtitulo">primavera 2025</span> </th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td class="col10">Sagat</td> </tr>
                                <tr> <td class="col11">Blanka</td> </tr>
                                <tr> <td class="col12">Vega</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="table-responsive wave5">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr>  <th>Wave 5 <br> <span class="subtitulo">primavera 2026</span> </th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td class="col13"> Akuma </td> </tr>
                                <tr> <td class="col14">E. Honda</td> </tr>
                                <tr> <td class="col15">Balrog</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="table-responsive wave6">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr> <th>Wave 6 <br> <span class="subtitulo">¿?</span> </th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td class="col16">T. Hawk</td> </tr>                                
                                <tr> <td class="col17"> Zangief </td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- fin segunda sección -->
            <!-- ------------------------------------------------------------------------------------- Tercera sección: Imágenes de las waves -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="assets/img/inicio/wave1y2.jpg" class="img-fluid" alt="Wave 1-2">
                </div>
                <div class="col-md-4">
                    <img src="assets/img/inicio/wave3y4.jpg" class="img-fluid" alt="Wave 3-4">
                </div>
                <div class="col-md-4">
                    <img src="assets/img/inicio/wave5y6.jpg" class="img-fluid" alt="Wave 5-6">
                </div>
            </div> <!-- fin tercera sección -->
            <!-- ------------------------------------------------------------------------------------------- Cuarta sección: Tabla Especiales -->
            <div>
                <h5>Una vez mencionados los 18 que saldrán en waves, cabe mencionar las variantes y especiales, aunque las especiales no llevan en sí un orden referente al roster a las waves, al igual que las variantes que salen salteadas y por diferentes empresas.</h5>
                <div> <!-- especiales tabla -->
                    <div class="table-responsive tabla-especiales">
                        <table class="table table-bordered-especiales table-striped table-hover table-sm">
                            <thead class="encabezado-especiales">
                                <tr class="titulo-tabla-especiales">
                                    <td colspan="3" class="text-center"><strong> Especiales </strong></td>
                                </tr>
                                <tr>
                                    <th>Personaje</th>
                                    <th>Detalles</th>
                                    <th>Características</th>
                                </tr>
                            </thead>
                            <!-- Fila de título -->
                            <tbody> <!-- ------------------------------------------------------------------------------------------ EVIL RYU -->
                                <tr class="fila1E"> 
                                    <td> Evil Ryu </td>
                                    <td> SDCC 2023 </td>
                                    <td> Caja diferente y grande, traje gris oscuro; 3 rostros, 2 pares de manos, 2 letreros y 2 efectos </td>
                                </tr>
                            </tbody>
                            <tbody> <!-- --------------------------------------------------------------------------------------- VIOLENT KEN -->
                                <tr class="fila2E"> 
                                    <td> Violent Ken </td>
                                    <td> SDCC 2024 </td> 
                                    <td> Caja diferente y grande, traje rojo; 3 rostros, 2 pares de manos, 2 efectos y 2 barriles </td>
                                </tr>
                            </tbody>
                            <tbody> <!-- ------------------------------------------------------------------------------------------- CHUN LI -->
                                <tr class="fila3E"> 
                                    <td> Chun Li Player 2 </td>
                                    <td> SDCC 2024 </td> 
                                    <td> Caja diferente y mediana, traje rosa; 4 rostros, 3 pares de manos y 2 efectos </td>
                                </tr>
                            </tbody>
                            <tbody> <!-- ------------------------------------------------------------------------------------------ FEI LONG -->
                                <tr class="fila4E">
                                    <td> Fei Long Player 2 </td>
                                    <td> Wondercon 2025 </td>
                                    <td> Caja diferente y mediana, traje morado; 3 rostros, 4 pares de manos, 1 efecto y 2 nunchakos </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr class="fila5E">
                                    <td> M. Bison Player 2 </td>
                                    <td> SDCC 2025</td>
                                    <td> Caja diferente y grande, traje verde con naranja; 6 rostros, 3 pares de manos, 2 efectos y un cuerpo quemado </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr class="fila6E">
                                    <td> Dhalsim Player 2 </td>
                                    <td> SDCC 2025 </td>
                                    <td> Caja diferente y grande, cuerpo color morado y short naranja; 4 rostros, 4 pares de manos, 2 efectos de fuego, piernas y brazos con efecto, y un cuerpo quemado </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- especiales tabla -->
            </div> <!-- fin cuarta sección -->
            <!-- --------------------------------------------------------------------------------- Quinta sección: Imágenes de los especiales -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="assets/img/inicio/chunlirosa1.jpg" class="img-fluid" alt="Chun Li PLayer 2 rosa">
                </div>
                <div class="col-md-4">
                    <img src="assets/img/inicio/chunlirosa2.jpg" class="img-fluid" alt="Chun Li Player 2 rosa">
                </div>
                <div class="col-md-4">
                    <img src="assets/img/inicio/chunlirosa3.jpg" class="img-fluid" alt="Chun Li Player 2 rosa">
                </div>
            </div> <!-- fin quinta sección -->
            <div> <!-- --------------------------------------------------------------------------------------- Sexta sección: Tabla Variantes -->
                <div> <!-- variantes tabla -->
                    <div class="table-responsive tabla-variantes">
                        <table class="table table-bordered-variantes table-striped table-hover table-sm">
                            <thead class="encabezado-variantes">
                                <tr class="titulo-tabla-variantes">
                                    <td colspan="3" class="text-center"><strong> Variantes </strong></td>
                                </tr>
                                <tr>
                                    <th>Personaje</th>
                                    <th>Detalles</th>
                                    <th>Características</th>
                                </tr>
                            </thead>
                            <tbody> <!-- ----------------------------------------------------------------------------------------------- RYU -->
                                <tr class="fila1V"> 
                                    <td> Ryu </td>
                                    <td> Paulmartstore</td>
                                    <td> Misma caja y accesorios, traje gris </td>
                                </tr>
                            </tbody>
                            <tbody> <!-- ----------------------------------------------------------------------------------------------- KEN -->
                                <tr class="fila2V"> 
                                    <td style="color:black !important;"> Ken </td>
                                    <td style="color:black !important;"> Entertainment Earth </td>
                                    <td style="color:black !important;"> Misma caja y accesorios más un extra (Shoryuken), traje blanco </td> 
                                </tr>
                            </tbody>
                            <tbody> <!-- ------------------------------------------------------------------------------------------- CHUN LI -->
                                <tr class="fila3V"> 
                                    <td> Chun Li </td>
                                    <td> Target </td>
                                    <td> Misma caja y accesorios, traje rojo </td> 
                                </tr>
                            </tbody>
                            <tbody> <!-- ------------------------------------------------------------------------------------------- M BISON -->
                                <tr class="fila4V"> 
                                    <td> M. Bison </td>
                                    <td > Big Bad Toy Store </td>
                                    <td> Misma caja y accesorios, traje azul </td> 
                                </tr>
                            </tbody>
                            <tbody> <!-- --------------------------------------------------------------------------------------------- GUILE -->
                                <tr class="fila5V">
                                    <td> Guile </td>
                                    <td> Target </td>
                                    <td> Misma caja y accesorios, traje azul</td>
                                </tr>
                            </tbody>
                            <tbody> <!-- --------------------------------------------------------------------------------------------- CAMMY -->
                                <tr class="fila6V">
                                    <td> Cammy </td>
                                    <td> Entertainment Earth</td>
                                    <td> Misma caja y accesorios, traje gris con rosa</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr class="fila7V">
                                    <td> Blanka </td>
                                    <td> Big Bad Toy Store </td>
                                    <td> Misma caja y accesorios, personaje color azul</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- variantes tabla -->
            </div> <!-- fin sexta sección -->
            <!-- --------------------------------------------------------------------------------- Séptima sección: Imágenes de las variantes -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="assets/img/inicio/guileV.jpg" class="img-fluid" alt="Guile variante en color ">
                </div>
                <div class="col-md-4">
                    <img src="assets/img/inicio/vegaV.jpg" class="img-fluid" alt="Vega variante en color ">
                </div>
                <div class="col-md-4">
                    <img src="assets/img/inicio/cammyV.jpg" class="img-fluid" alt="Cammy variante en color ">
                </div>
            </div> <!-- fin séptima sección -->
            <!-- ------------------------------------------------------------------------------------------------------- Octava sección: Lose -->
            <div>
                <h5> Asimismo, en la San Diego Comic-con 2026 tenemos los accesorios "You lose", es decir un set que contiene los rostros para todo el roster y algunas manos también para algunos de ellos, cuando el personaje en cuestión pierde. </h5>
            </div>
            <!-- ---------------------------------------------------------------------------------------------- Novena sección: Imágenes lose -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="assets/img/inicio/lose1.jpg" class="img-fluid" alt="Lose 1">
                </div>
                <div class="col-md-4">
                    <img src="assets/img/inicio/lose2.jpg" class="img-fluid" alt="Lose 2">
                </div>
                <div class="col-md-4">
                    <img src="assets/img/inicio/lose3.jpg" class="img-fluid" alt="Lose 3">
                </div>
            </div> <!-- tercera fila -->
        </div> <!-- contenido -->
    </div>
@endsection