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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', function () {
    return view('auth.profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('proveedor', 'ProveedorController');


Route::resource('cliente', 'ClienteController');



Route::resource('item', 'ItemController');


Route::resource('equipo', 'EquipoController');


Route::resource('contacto', 'ContactoController');
Route::get('contacto/create','ContactoController@create');


Route::resource('sucursal', 'SucursalController');


Route::resource('banco', 'BancoController');



