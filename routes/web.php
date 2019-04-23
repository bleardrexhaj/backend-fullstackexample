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
$router->group(['prefix' => 'api'], function ($router) {
    $router->get('/questions','QuestionController@list');
    $router->get('/questions/show/{id}','QuestionController@getById');
    $router->post('/questions/delete/{id}','QuestionController@delete');
    $router->group(['middleware' => 'jwt'], function ($router) {
        $router->post('/login', 'AuthController@login');
    });
});