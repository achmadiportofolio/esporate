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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('show_banner', 'BannerController@index');
$router->get('get_categories', 'CategoryController@index');
$router->get('show_category/{id}', 'CategoryController@show');
$router->get('get_products', 'ProductsController@index');
$router->get('get_product/{id}', 'ProductsController@show');
