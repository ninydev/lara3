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

Route::get('feeback','FeedBack@Form')->name('FeedBack');
Route::post('feeback','FeedBack@Send')->name('FeedBack.Send');

Route::get('beds','ControllerBed@index' )->name("beds");
Route::get('beds/{id}','ControllerBed@show' );

Route::get('cars','ControllerCar@index' )->name("cars");
//Route::get('cars/{id}','ControllerCar@show' )->name("car");
Route::get('cars/{category}/{slug}','ControllerCar@showAll' )->name("carbyslag");
//Route::resource('cars', 'ControllerCar');
// https://laravel.com/docs/5.7/controllers#resource-controllers
Route::get('vendors','ControllerVendor@index' )->name("vendors");
Route::get('vendors/{id}','ControllerVendor@show' )->name("vendor");

Route::any('posts', 'PostController@index')->name("posts");
Route::post('posts1', 'PostController@index')->name("postsPost");
Route::get('posts/{category}/', 'PostController@viewByCat')->name("posts.cat");
Route::get('post/{category}/{slug}', 'PostController@viewOne')->name("post.one");

Route::Auth();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
