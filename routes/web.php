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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::resource('fabricante','FabricanteController');
Route::get('api/fabricantedata','FabricanteController@anyData')->name('api.fabricantedata');
//Route::group( ['prefix'=>'fabricante'], function() {
//    Route::get('/', 'FabricanteController@index');
//    Route::get('/add', 'FabricanteController@create');
//    Route::post('/', 'FabricanteController@store');
//    Route::get('{id}', 'FabricanteController@show');
//    Route::get('/edit/{id}', 'FabricanteController@edit');
//    Route::put('{id}', 'FabricanteController@update');
//    Route::delete('{id}', 'FabricanteController@destroy');
//});


Route::group( ['prefix'=>'medicamento'], function() {
    Route::get('/', 'MedicamentoController@index');
    Route::get('/add', 'MedicamentoController@create');
    Route::post('/', 'MedicamentoController@store');
    Route::get('{id}', 'MedicamentoController@show');
    Route::get('/edit/{id}', 'MedicamentoController@edit');
    Route::put('{id}', 'MedicamentoController@update');
    Route::delete('{id}', 'MedicamentoController@destroy');
});

