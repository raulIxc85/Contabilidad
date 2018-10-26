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

//Rutas TipoCuentaController
Route::group (['prefix'=>'TipoCuenta'], function(){
    Route::get('index','TipoCuentaController@index');
    Route::get('editar/{id}','TipoCuentaController@editar');
    Route::post('guardar','TipoCuentaController@guardar');
    Route::get('eliminar/{id}','TipoCuentaController@eliminar');
    Route::post('actualizar','TipoCuentaController@actualizar');
});


//Rutas Empresa
Route::group (['prefix'=>'Empresa'], function(){
    Route::get('index','EmpresaController@index');

});

//Rutas Empresa
Route::group (['prefix'=>'Cuentas'], function(){
    Route::get('index','CuentasController@index');

});


//Ruta Home
Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
