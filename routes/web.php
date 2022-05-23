<?php

use Illuminate\Support\Facades\Route;

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


Route::get('login', 'App\Http\Controllers\AuthController@index');
Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin'); 
Route::get('register', 'App\Http\Controllers\AuthController@register');
Route::post('post-register', 'App\Http\Controllers\AuthController@postRegister'); 
Route::get('logout', 'App\Http\Controllers\AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/admin/create/product', 'App\Http\Controllers\ProductController@index');
Route::post('/admin/create/product', 'App\Http\Controllers\ProductController@create');
Route::get('/admin/edit/product/{id}', 'App\Http\Controllers\ProductController@edit');
Route::patch('/admin/edit/product', 'App\Http\Controllers\ProductController@update');
Route::post('/admin/delete/product', 'App\Http\Controllers\ProductController@delete');
Route::get('/admin/view/product/{id}', 'App\Http\Controllers\ProductController@view');

Route::get('/admin/create/category', 'App\Http\Controllers\CategorieController@index');
Route::post('/admin/create/categorie', 'App\Http\Controllers\CategorieController@create');
});