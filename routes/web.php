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
    //get info tinh thanh
    $router->post('getTinhThanh','TinhController@getTinh');

    //get info quanhuyen by tinh thanh
    $router->post('getQuanHuyen','QuanhuyenController@getQuanhuyen');

    //get info xaphuong by tinh quanhuyen
    $router->post('getXaphuong','XaphuongController@getXaphuong');

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
            return view('contents.index', ['title' => 'Home page Admin','id'=>'home']);
        });
        $router->get('quanhuyen', function ()  {
            return view('contents.quanhuyen', ['title' => 'Page quanhuyen','id'=>'quanhuyen']);
        });
        $router->get('tinmuaban', function ()  {
            return view('contents.tinmuaban', ['title' => 'Page Tin mua bán','id'=>'tinmuaban']);
        });
    });
});
