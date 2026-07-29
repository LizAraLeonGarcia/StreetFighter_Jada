<?php

use Illuminate\Support\Facades\Route;
// --------------------------------------------------- Ruta para la página principal (Inicio) ---------------------------------------------------
Route::get('/', function () {
    return view('inicio');
})->name('inicio');
// ----------------------------------------------------- Ruta para la sección de Personajes -----------------------------------------------------
Route::get('/personajes', function () {
    return view('personajes');
})->name('personajes');
// ----------------------------------------------------- Ruta para la sección de Especiales -----------------------------------------------------
Route::get('/especiales', function () {
    return view('especiales');
})->name('especiales');
// ------------------------------------------------------- Ruta para la sección Variantes -------------------------------------------------------
Route::get('/variantes', function () {
    return view('variantes');
})->name('variantes');
// -------------------------------------------------------- Ruta para la sección Galería --------------------------------------------------------
Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');