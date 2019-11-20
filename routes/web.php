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
$routes->get('/clientes', ['uses' => 'ClientesController@getClientes']);
$routes->get('/clientes/{id}', ['uses' => 'ClientesController@getClientePorId']);
$routes->post('/clientes', ['uses' => 'ClientesController@postLogin']);
$routes->post('/clientes', ['uses' => 'ClientesController@postRegistro']);
$routes-put('/clientes', ['uses' => 'ClientesController@putCliente']);
$routes->delete('/clientes', ['uses' => 'ClienteController@deleteCliente']);
$routes->get('/menu', ['uses' => 'MenusController@getMenus']);
$routes->get('/menu/{id}', ['uses' => 'MenusController@getMenuPorId']);
$routes->post('/menu', ['uses' => 'MenusController@postMenu']);
$routes->put('/menu', ['uses' => 'MenusController@putMenu' ]);
$routes->delete('/menu', ['uses' => 'MenusController@deleteMenu']);
$routes->get('/negocios', ['uses' => 'NegociosController@getNegocios']);
$routes->get('/negocios/{id}', ['uses' => 'NegociosController@getNegocioPorId']);
$routes->post('/negocios', ['uses' => 'NegociosController@postLogin']);
$routes->post('/negocios', ['uses' => 'NegociosController@postRegistro']);
$routes->put('/negocios', ['uses' => 'NegociosController@putNegocio']);
$routes->delete('/negocios', ['uses' => 'NegociosController@deleteNegocio']);
$routes->get('/pedidos', ['uses' => 'PedidosController@getPedidos']);
$routes->get('/pedidos/{id}', ['uses' => 'PedidosController@getPedidoPorId']);
$routes->post('/pedidos', ['uses' => 'PedidosController@postPedido']);
$routes->put('/pedidos', ['uses' => 'PedidosController@putPedido']);
$routes->delete('/pedidos', ['uses' => 'PedidosController@deletePedido']);
$routes->get('/platillo', ['uses' => 'PlatillosContoller@getPlatillos']);
$routes->get('/platillo/{id}', ['uses' => 'PlatillosContoller@getPlatilloPorId']);
$routes->post('/platillo', ['uses' => 'PlatillosContoller@postPlatillo']);
$routes->put('/platillo', ['uses' => 'PlatillosContoller@putPlatillo']);
$routes->delete('/platillo', ['uses' => 'PlatillosContoller@deletePlatillo']);