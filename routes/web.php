<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\ProductController;
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

$router->get('/product','ProductController@index');
$router->post('/save','ProductController@create');
$router->delete('/product/{id}','ProductController@delete');
$router->put('/product/{id}', 'ProductController@update');


$router->get('/', function () use ($router) {
    return $router->app->version();
});
