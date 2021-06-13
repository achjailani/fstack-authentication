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

$router->group(['prefix' => 'api/v1', 'namespace' => 'API'], function () use ($router) {
    $router->group(['namespace' => 'Auth'], function() use ($router) {
        $router->post('/register', 'RegisterController@register');
        $router->post('/login', 'LoginController@login');
    });

    $router->group(['prefix' => 'users', 'middleware' => 'auth:api'], function() use ($router) {
        $router->get('/', ['middleware' => 'role:admin', 'uses' => 'UserController@getAll']);
        $router->get('/show/{id}', 'UserController@find');
        $router->put('/update/{id}', 'UserController@update');
        $router->delete('/delete', 'UserController@delete');
    });
});
