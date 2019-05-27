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
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('/register', 'RegisterController@register');
    $router->post('/login', 'LoginController@login');
    $router->post('/quanhuyen', 'LoginController@login');

    $router->group(['middleware' => 'jwt.auth'], function () use ($router) {
        $router->group(['prefix' => 'media'], function () use ($router) {
            $router->post('/uploadImage','MediaController@uploadImage');
        });
    });
});
$router->group(['prefix' => 'admin'], function () use ($router) {
    $router->group(['middleware' => 'guest'], function () use ($router) {
        $router->get('login', 'AuthController@index');
        $router->get('register', 'AuthController@register');
    });

    $router->group(['middleware' => 'admin'], function () use ($router) {
        $router->get('home', function ()  {
            return view('contents.index', ['title' => 'Home page Admin']);
        });
        $router->get('quanhuyen', function ()  {
            return view('contents.quanhuyen', ['title' => 'Page quanhuyen']);
        });
        $router->get('tinmuaban', function ()  {
            return view('contents.tinmuaban', ['title' => 'Page Tin mua bán']);
        });
    });
});
