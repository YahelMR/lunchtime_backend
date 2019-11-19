<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Rutas para categorías
$routes->get('/categorias', ['uses' => 'CategoriasController@getCategorias']);
$routes->get('/categorias/{id}', ['uses' => 'CategoriasController@getCategoriaPorId']);
$routes->post('/categorias', ['uses' => 'CategoriasController@postCategoria']);
$routes->put('/categorias', ['uses' => 'CategoriasController@putCategoria']);
$routes->delete('/categorias', ['uses' => 'CategoriasController@deleteCategoria']);
