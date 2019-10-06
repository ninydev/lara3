<?php

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

Route::get('cars','ControllerCar@index' )->name("cars");
Route::get('cars/{id}','ControllerCar@show' )->name("car");
//Route::resource('cars', 'ControllerCar');
// https://laravel.com/docs/5.7/controllers#resource-controllers


Route::Auth();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
