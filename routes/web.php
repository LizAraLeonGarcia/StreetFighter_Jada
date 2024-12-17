<?php

use Illuminate\Support\Facades\Route;
// Ruta para la página principal (Inicio)
Route::get('/', function () {
    return view('inicio');
});
// Ruta para la sección de personajes
Route::get('/personajes', function () {
    return view('personajes');
});
// Ruta para la sección de figuras
Route::get('/especiales', function () {
    return view('especiales');
});
// Ruta para la sección de figuras
Route::get('/variantes', function () {
    return view('variantes');
});
// Ruta para la sección de galería
Route::get('/galeria', function () {
    return view('galeria');
});