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

    // get InfoCategory loaitin 
    $router->post('getLoaitin','LoaitinController@getLoaitin');

    $router->post('getTinmuaban','HomeController@getTinmuaban');

    $router->group(['middleware' => 'jwt.auth'], function () use ($router) {
        $router->group(['prefix' => 'media'], function () use ($router) {
            $router->post('/uploadImage','MediaController@uploadImage');
        });
        $router->group(['prefix' => 'tintuc'], function () use ($router) {
            $router->post('/themtin','HomeController@createNews');
            $router->post('/editTinmua','HomeController@postEditTinmua');
            $router->post('/editTintuc','HomeController@postEditTintuc');
        });
    });
});
$router->group(['prefix' => 'admin'], function () use ($router) {
    $router->group(['middleware' => 'guest'], function () use ($router) {
        $router->get('login', 'AuthController@index');
        $router->get('register', 'AuthController@register');
    });

    $router->group(['middleware' => 'admin'], function () use ($router) {
        $router->get('home','HomeController@index');
        
        $router->get('quanhuyen', function ()  {
            return view('contents.quanhuyen', ['title' => 'Page quanhuyen','id'=>'quanhuyen']);
        });
        $router->get('vietbai', function ()  {
            return view('contents.vietbai', ['title' => 'Viết bài mới','id'=>'vietbai']);
        });
        //Get tin mua ban - backend admin
        $router->get('tinmuaban','HomeController@getTinmuaban');
        //Get tin tuc - backend
        $router->get('tintucnhadat/{id}','HomeController@getTintucnhadat');

        //Get tin tuc - edit
        $router->get('editTinmua/{id}','HomeController@getEditTinmua');

        // edit tintuc
        $router->get('editTintuc/{id}','HomeController@getEditTintuc');

        
    });
});
