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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/nuevo_item', function () {
    return view('items.items');
});


Route::get('/nuevo_contacto', function () {
    return view('compras.proveedores');
});


Route::get('/nuevo_cliente', function () {
    return view('ventas.clientes');
});

Route::get('/perfil', function () {
    return view('auth.prolife');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('proveedor', 'ProveedorController');



