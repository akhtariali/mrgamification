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

Route::get('/contactus', [
    'uses' => 'ContactFormController@create'
]);
Route::post('/contactus', [
    'uses' => 'ContactFormController@store',
    'as' => 'contactus.store'
]);


Route::resource('blog', 'BlogController');
Route::resource('categories', 'CategoriesController');
Auth::routes();