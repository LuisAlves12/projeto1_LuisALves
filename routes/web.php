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

Route::get('/', 'App\Http\Controllers\PortalController@index')
    ->name('view.index');

Route::get('/noticias', 'App\Http\Controllers\PortalController@noticias')
    ->name('view.noticias');

Route::get('/empresa', 'App\Http\Controllers\PortalController@empresa')
    ->name('view.empresa');

Route::get('/onde-estamos', 'App\Http\Controllers\PortalController@ondeestamos')
    ->name('view.ondeestamos');

Route::get('/contactos', 'App\Http\Controllers\PortalController@contactos')
    ->name('view.contactos');

Route::post('/formulario', 'App\Http\Controllers\PortalController@processarFormulario')
    ->name('view.formulario');

Route::get('/mostrar', 'App\Http\Controllers\PortalController@mostraSite')
    ->name('view.mostrar');