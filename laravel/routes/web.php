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

$router->group(['prefix' => 'api'], function () use ($router) {

  $router->post('posts', ['uses' => 'PostController@store']);
  
  $router->get('posts',  ['uses' => 'PostController@showAll']);

  $router->get('posts/{id}', ['uses' => 'PostController@show']);

  $router->delete('posts/{id}', ['uses' => 'PostController@delete']);

  $router->put('posts/{id}', ['uses' => 'PostController@update']);

});
