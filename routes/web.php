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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_task', 'HomeController@product_form');
Route::post('task_insert','HomeController@store');
Route::get('delete_task/{id}','HomeController@delete');
Route::post('edit_task/{id}','HomeController@update');
Route::get('/logout/{user_id}', 'LogoutController@logout');
