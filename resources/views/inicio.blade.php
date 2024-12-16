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
                    <p>.</p>
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
                <h4>Además de los 18 antes mencionados, también hay variantes y especiales.</h4>
                <div class="col-md-6">
                    <p>Entre los especiales están:</p>
                    <div class="table-responsive wave6">
                        <table class="table table-bordered table-striped table-hover table-sm shadow-lg">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Personaje</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>
                            <tbody> <!-- ------------------------------------------------------------------------------------------ EVIL RYU -->
                                <tr> 
                                    <td> Evil Ryu </td>
                                    <td> Perteneciente a la SDCC 2023 </td>
                                </tr>
                            </tbody>
                            <tbody> <!-- --------------------------------------------------------------------------------------- VIOLENT KEN -->
                                <tr> 
                                    <td> Violent Ken </td>
                                    <td> Perteneciente a la SDCC 2024 </td> 
                                </tr>
                            </tbody>
                            <tbody> <!-- --------------------------------------------------------------------------------------- CHUN LI -->
                                <tr> 
                                    <td> Chun Li Player 2 (Rosa) </td>
                                    <td> Perteneciente a la SDCC 2024 </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Entre las variantes están:</p>
                    <div class="table-responsive wave6">
                        <table class="table table-bordered table-striped table-hover table-sm shadow-lg">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Personaje</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>
                            <tbody> <!-- ----------------------------------------------------------------------------------------------- RYU -->
                                <tr> 
                                    <td> Ryu </td>
                                    <td> Player 2 (traje gris) </td>
                                </tr>
                            </tbody>
                            <tbody> <!-- ----------------------------------------------------------------------------------------------- KEN -->
                                <tr> 
                                    <td> Ken </td>
                                    <td> Player 2 (traje blanco) </td> 
                                </tr>
                            </tbody>
                            <tbody> <!-- ------------------------------------------------------------------------------------------- CHUN LI -->
                                <tr> 
                                    <td> Chun Li </td>
                                    <td> Traje rojo </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection