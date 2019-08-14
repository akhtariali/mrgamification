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
    return view('pages.home');
});

Route::get('/solutions', function () {
    return view('pages.solutions');
});

Route::get('/aboutus', function () {
    return view('pages.aboutUs');
});

Route::get('/contactus', function () {
    return view('pages.contactUs');
});

Route::resource('blog', 'BlogController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
