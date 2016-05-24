<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('publico/principal');
});

Route::get('/dj', function () {
    return view('publico/dj');
});

Route::get('/dica1', function () {
    return view('publico/dica1');
});

Route::get('/dica2', function () {
    return view('publico/dica2');
});

Route::get('/dica3', function () {
    return view('publico/dica3');
});

Route::get('/dica4', function () {
    return view('publico/dica4');
});

Route::get('/estruturas', function () {
    return view('publico/estruturas');
});

Route::get('/foto', function () {
    return view('publico/foto');
});

Route::get('/contato', function () {
    return view('publico/contato');
});


Route::post('/gravar','ContatosController@gravar');

Route::get('/depoimentos','DepoimentosController@buscar');

