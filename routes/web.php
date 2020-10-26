<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('view.index');

Route::get('/noticias', function(){
    return view('noticias');
})->name('view.noticias');

Route::get('/empresa', function(){
    return view('empresa');
})->name('view.empresa');

Route::get('/onde-estamos', function(){
    return view('onde-estamos');
})->name('view.ondeestamos');

Route::get('/contactos', function(){
    return view('contactos');
})->name('view.contactos');

Route::post('/formulario', 'App\Http\Controllers\PortalController@processarFormulario')
    ->name('view.formulario');

Route::get('/mostrar', 'App\Http\Controllers\PortalController@mostraSite')
    ->name('view.mostrar');