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


//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/chat', 'ChatController@index')->name('chat');
Route::get('/charts', 'ChartsController@index')->name('charts');
Route::get('/people', 'PeopleController@index')->name('people');
Route::post('profile', 'ProfileController@update_avatar');
//Route::get('/alumni', 'AlumniController@index')->name('alumni_management');
//Route::get('/shit', 'AdminController@index')->name('shit');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
