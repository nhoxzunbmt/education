<?php

use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

$router->get('districts/{city_id}', 'DistrictsController@show');

$router->group(['namespace' => 'Front'], function (Router $router) {
    $router->get('dang-ky-tim-gia-su', 'PeopleController@create');
    $router->post('dang-ky-tim-gia-su', 'PeopleController@store');
    $router->get('dang-ky-gia-su', 'TeachersController@create');
    $router->post('dang-ky-gia-su', 'TeachersController@store');
    $router->get('/', 'HomeController@index');
    $router->get('contact', 'HomeController@contact');
});

Route::get('/home', 'HomeController@index');

$router->group(['prefix' => 'backend', 'namespace' => 'Back'], function (Router $router) {
    $router->get('login', 'SessionController@getLogin');
    $router->post('login', 'SessionController@login');
    $router->get('/', 'HomeController@index');
    $router->resource('roles', 'RolesController');
    $router->resource('users', 'UsersController');
    $router->resource('partners', 'PartnersController', ['only' => ['index', 'show', 'distroy']]);
});