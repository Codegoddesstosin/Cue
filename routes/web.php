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

Route::get('/profile', 'UserController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/students/create', 'StudentController@profile');

Route::get('/pay', 'UserController@pay');

//Route::get('/summary', 'UserController@summary');

Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

//Route::resource('users', 'UserController');

Route::resource('students', 'StudentController');