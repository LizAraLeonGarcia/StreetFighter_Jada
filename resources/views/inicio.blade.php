@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- ----------------------------------------------------- contendor de título ----------------------------------------------------- -->
        <div class="section-title-INICIO">
            <h1>Street Fighter<h1>
            <h2>En esta página te muestro mi colección de Street Fighter: Jada Toys</h2>
            <h4>La marca Jada Toys está creciendo velozmente al ofrecer productos de esta saga tan conocida a un precio accesible y con excelente calidad...</h4>
        </div>
        <!-- ---------------------------------------------------- contenedor de inicio ---------------------------------------------------- -->
        <div class="inicio" id="inicio">
            <!-- ------------------------------------------------------ Primera fila ------------------------------------------------------ -->
            <div class="row mb-4">
                <div class="col-md-5">
                    <p>Esta colección de la marca Jada Toys comenzó por octubre del 2023. Aunque las fechas de las entregas, tanto de las waves como de los personajes varían mucho entre países, llegando generalmente a Europa, Asia y Estados Unidos antes que en mi país México</p>
                    <p>Las entregas se hacen en waves, grupos, de a 3 personajes, siempre siendo los mismos a nivel mundial, además hay persoanjes que son "especiales", pues salen en la Convención Internacional de Cómics de San Diego; también conocida como Comic-Con San Diego y abreviada en inglés por SDCC. Asimismo hay variantes de los personajes que poco van saliendo y se consiguen en aplicaciones como Aliexpress, Mercado Libre o Amazon, por mencionar algunas.
                    <p>Yo te mostraré mi colección en esta página como ya viste en uno de los títulos, son fotos que les tomé conforme iba consiguiendo a los personajes, a excepción de esta sección <strong>Inicio</strong> que tomé imágenes de google.</p>
                    <p>Decidí dividirlos en secciones, donde:</p>
                    <ul>
                        <li> <strong>Personajes</strong> incluye a los personajes que sacaron en las waves.</li>
                        <li> <trong>Especiales</strong> incluye a los personajes exclusivos como aquellos que salieron en la SDCC.</li>
                        <li> <strong>Variantes</strong> incluye a los personajes generalmente que son player 2, o que tienen un cambio de color y no fueron exclusivos de la SDCC.</li>
                        <li> <strong>Galería</strong> son simplemente fotografías que yo tomé de los personajes usando mi imaginación para las poses y demás.</li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <img src="assets/img/inicio/personajes.jpg" class="img-fluid" alt="Algunos de los personajes de la colección">
                </div>
            </div>
            <!-- ------------------------------------------------------ Segunda fila ------------------------------------------------------ -->
            <div class="row mb-4">
                <div class="col-md-2">
                    <div class="table-responsive wave1">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr> <th>Wave 1</th> </tr>
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
                                <tr> <th>Wave 2</th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td class="col4">Ken</td> </tr>
                                <tr> <td class="col5">M. Bison</td> </tr>
                                <tr> <td class="col6">Dhalsim</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="table-responsive wave3">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr> <th>Wave 3</th> </tr>
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
                                <tr> <th>Wave 4</th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td class="col10">Vega</td> </tr>
                                <tr> <td class="col11">Sagat</td> </tr>
                                <tr> <td class="col12">Blanka</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="table-responsive wave5">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr>  <th>Wave 5</th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td class="col13">T. Hawk</td> </tr>
                                <tr> <td class="col14">Balrog</td> </tr>
                                <tr> <td class="col15">E. Honda</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="table-responsive wave6">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="encabezado-tabla">
                                <tr> <th>Wave 6</th> </tr>
                            </thead>
                            <tbody>
                                <tr> <td> . </td> </tr>
                                <tr> <td> . </td> </tr>
                                <tr> <td>¿ ?</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ------------------------------------------------------ Tercera fila ------------------------------------------------------ -->
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
            </div>
            <!-- ------------------------------------------------------ Cuarta  fila ------------------------------------------------------ -->
            <div class="row mb-4">
                <h5>Además de los 18 antes mencionados, también hay variantes y especiales.</h5>
                <div class="col-md-6">
                    <div class="table-responsive">
                        <table class="table tabla-especiales table-bordered table-striped table-hover table-sm">
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
                                <tr> 
                                    <td> Evil Ryu </td>
                                    <td> SDCC 2023 </td>
                                    <td> Accesorios extras, incluidos letreros, caja más grande </td>
                                </tr>
                            </tbody>
                            <tbody> <!-- --------------------------------------------------------------------------------------- VIOLENT KEN -->
                                <tr> 
                                    <td> Violent Ken </td>
                                    <td> SDCC 2024 </td> 
                                    <td> Accesorios extras, incluidos barriles, caja más grande </td>
                                </tr>
                            </tbody>
                            <tbody> <!-- --------------------------------------------------------------------------------------- CHUN LI -->
                                <tr> 
                                    <td> Chun Li Player 2 </td>
                                    <td> SDCC 2024 </td> 
                                    <td> Traje rosa, accesorios extras y caja más grande </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="table-responsive variantes-table">
                        <table class="table table-variantes table-bordered table-striped table-hover table-sm">
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
                                <tr> 
                                    <td> Ryu </td>
                                    <td> Player 2 </td>
                                    <td> Misma caja y accesorios, traje gris </td>
                                </tr>
                            </tbody>
                            <tbody> <!-- ----------------------------------------------------------------------------------------------- KEN -->
                                <tr> 
                                    <td> Ken </td>
                                    <td> Player 2 </td>
                                    <td> Misma caja, accesorio extra Shoryuken, traje blanco </td> 
                                </tr>
                            </tbody>
                            <tbody> <!-- ------------------------------------------------------------------------------------------- CHUN LI -->
                                <tr> 
                                    <td> Chun Li </td>
                                    <td> </td>
                                    <td> Misma caja y accesorios, traje rojo </td> 
                                </tr>
                            </tbody>
                            <tbody> <!-- ------------------------------------------------------------------------------------------ FEI LONG -->
                                <tr> 
                                    <td> Fei Long </td>
                                    <td> Player 2 </td>
                                    <td> Misma caja, accesorios extra de manos y un par de nunchakos, traje gris </td> 
                                </tr>
                            </tbody>
                            <tbody> <!-- ------------------------------------------------------------------------------------------- M BISON -->
                                <tr> 
                                    <td> M. Bison </td>
                                    <td> Player 2</td>
                                    <td> Misma caja y accesorios, traje azul </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection