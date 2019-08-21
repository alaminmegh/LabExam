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

Route::get('/home', 'HomeController@index')->name('home.index');

// ******************* Routes For Login Controller *************************
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@user_validation');

Route::get('/logout', 'LogoutController@logout')->name('logout');

// ******************* Routes For Signup Controller *************************
Route::get('/signup', 'SignUpController@index')->name('signup.index');
Route::post('/signup', 'SignUpController@create_user');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/moderator', 'ModeratorController@index')->name('moderator.index');
