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

// Auth::routes();

$router->get('districts/{city_id}', 'DistrictsController@show');
$router->get('login', 'Auth\LoginController@getLogin');
$router->post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
$router->get('logout', 'Auth\LoginController@logout');
$router->post('logout', 'Auth\LoginController@logout');

$router->group(['namespace' => 'Front'], function (Router $router) {
    $router->get('profile', 'ProfileController@show');
    $router->get('dang-ky-tim-gia-su', 'PeopleController@create');
    $router->post('dang-ky-tim-gia-su', 'PeopleController@store');
    $router->get('dang-ky-gia-su', 'TeachersController@create');
    $router->post('dang-ky-gia-su', 'TeachersController@store');
    $router->get('/', 'HomeController@index');
    $router->get('contact', 'HomeController@contact');
    $router->get('phu-huynh-can-biet', 'PeopleController@know');
    $router->get('phu-huynh-luu-y', 'PeopleController@care');
    $router->get('hoc-phi-gia-su', 'PeopleController@fee');
    $router->get('dich-vu-gia-su', 'PeopleController@service');
    $router->get('danh-sach-lop', 'PeopleController@list');
    $router->get('chi-tiet/{slug}', 'PeopleController@show');
    $router->get('gia-su-nhan-lop', 'TeachersController@process');
    $router->get('phi-gia-su', 'TeachersController@fee');
    $router->get('gia-su-can-biet', 'TeachersController@know');
    $router->get('danh-sach-gia-su', 'TeachersController@list');
    $router->get('thanh-toan', 'TeachersController@payment');
    $router->get('grades/{slug}', 'BranchsController@index');
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