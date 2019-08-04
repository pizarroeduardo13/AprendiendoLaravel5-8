<?php
use Illuminate\Support\Facades\Route;
//use Symfony\Component\Routing\Route;

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

//LO COMENTO PARA PODER CACHEAR. NO SE PUEDE CACHEAR SI HAY FUNCIONES COMO LA ANTERIOR

Route::get('/', function () {
    return view('welcome');
});


//Route::get('admin/sistema/permiso', 'PermisoController@index')->name('permiso');
//Route::get('permiso/{nombre}/{slug?}', 'PermisoController@index');
//Route::view('permiso','permiso');
//Route::get('pruebaruta', 'PruebaRutaController@index');

Route::get('permiso/{nombre}',function ($nombre){
return $nombre;
})-> where('nombre','[A-Za-z]+')->name('permiso');