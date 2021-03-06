<?php

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

Route::get('api/sunat', 'ProveedorController@consulta');

Route::get('api/codigo', 'ItemController@codigo');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', function () {
    return view('auth.profile');
});

Auth::routes();

Route::get('/import', 'TestController@import');

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('proveedor', 'ProveedorController');


Route::resource('cliente', 'ClienteController');


Route::resource('elementos', 'ElementoController');


Route::resource('item', 'ItemController');


Route::resource('equipo', 'EquipoController');


Route::resource('contacto', 'ContactoController');
Route::get('contacto/create','ContactoController@create');


Route::resource('sucursal', 'SucursalController');


Route::resource('banco', 'BancoController');


Route::resource('presupuesto', 'BoletasController');


Route::resource('facturacion', 'FacturacionController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
