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

Route::get('/', 'PagesController@home');
Route::get('/blog', 'PagesController@blog');
Route::get('/faq', 'PagesController@faq');
Route::get('/contact', 'PagesController@contact');
Route::get('/blog/{slug}', 'PagesController@getPost');

Auth::routes();

Route::group(['prefix' => 'manage', 'middleware' => 'role:superadministrator|administrator'], function () {
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
    Route::resource('/posts', 'PostController');
    Route::resource('/tags', 'TagController');
});

Route::get('/home', 'HomeController@index')->name('home');
