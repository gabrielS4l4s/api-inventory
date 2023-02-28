<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello-world', function() use($router) {
    return 'Hello World';
});

//CRUD categoria
$router->get('/categorias', ['uses' => 'CategoriaController@index']);
$router->get('/categorias/{id}', ['uses' => 'CategoriaController@show']);
$router->post('/categorias', ['uses' => 'CategoriaController@store']);
$router->put('/categorias/{id}', ['uses' => 'CategoriaController@update']);
$router->delete('/categorias/{id}', ['uses' => 'CategoriaController@delete']);

//CRUD producto
$router->get('/productos', ['uses' => 'ProductoController@index']);
$router->get('/productos/{id}', ['uses' => 'ProductoController@show']);
$router->post('/productos', ['uses' => 'ProductoController@store']);
$router->put('/productos/{id}', ['uses' => 'ProductoController@update']);
$router->delete('/productos/{id}', ['uses' => 'ProductoController@delete']);

//CRUD cliente
$router->get('/clientes', ['uses' => 'ClienteController@index']);
$router->get('/clientes/{id}', ['uses' => 'ClienteController@show']);
$router->post('/clientes', ['uses' => 'ClienteController@store']);
$router->put('/clientes/{id}', ['uses' => 'ClienteController@update']);

//CRUD proveedor
$router->get('/proveedores', ['uses' => 'ProveedoresController@index']);
$router->get('/proveedores/{id}', ['uses' => 'ProveedoresController@show']);
$router->post('/proveedores', ['uses' => 'ProveedoresController@store']);
$router->put('/proveedores/{id}', ['uses' => 'ProveedoresController@update']);
$router->delete('/proveedores/{id}', ['uses' => 'ProveedoresController@delete']);

//CRUD compras
$router->get('/compras', ['uses' => 'ComprasController@index']);
$router->get('/compras/{id}', ['uses' => 'ComprasController@show']);
$router->post('/compras', ['uses' => 'ComprasController@store']);
$router->put('/compras/{id}', ['uses' => 'ComprasController@update']);
$router->delete('/compras/{id}', ['uses' => 'ComprasController@delete']);

//CRUD ventas
$router->get('/ventas', ['uses' => 'VentasController@index']);
$router->get('/ventas/{id}', ['uses' => 'VentasController@show']);
$router->post('/ventas', ['uses' => 'VentasController@store']);
$router->put('/ventas/{id}', ['uses' => 'VentasController@update']);
$router->delete('/ventas/{id}', ['uses' => 'VentasController@delete']);
