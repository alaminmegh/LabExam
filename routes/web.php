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

Route::get('/admin/addModerator', 'AdminController@addModerator')->name('admin.addModerator');
Route::post('/admin/addModerator', 'AdminController@createModerator');

Route::get('/admin/upload', 'AdminController@add_content')->name('admin.add_content');
Route::post('/admin/upload', 'AdminController@upload_content');

Route::get('/admin/softwareList', 'AdminController@softwareList')->name('admin.softwareList');

Route::get('/admin/profile', 'AdminController@showProfile')->name('admin.profile');

Route::get('/admin/searchContent', 'AdminController@searchContent')->name('admin.searchContent');

Route::get('/admin/content_delete', 'AdminController@contentDelete')->name('admin.contentDelete');


Route::get('/moderator/upload', 'ModeratorController@add_content')->name('moderator.add_content');
Route::post('/moderator/upload', 'ModeratorController@upload_content');

Route::get('/moderator/softwareList', 'ModeratorController@softwareList')->name('moderator.softwareList');

Route::get('/moderator/profile', 'ModeratorController@showProfile')->name('moderator.profile');

Route::get('/moderator/searchContent', 'ModeratorController@searchContent')->name('moderator.searchContent');

Route::get('/moderator/content_delete', 'ModeratorController@contentDelete')->name('moderator.contentDelete');
