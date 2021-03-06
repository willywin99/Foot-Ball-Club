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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->group(['prefix' => 'api/v1', 'namespace' => 'v1'], function() use ($router) {

    $router->get('/clubs', 'ClubController@index');
    $router->post('/clubs', 'ClubController@store');
    $router->put('/clubs/{id}', 'ClubController@update');
    $router->delete('/clubs/{id}', 'ClubController@destroy');
    $router->get('/clubs/{id}', 'ClubController@show');

});
