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

Route::get('/login', 'pagesController@getLogin');

Route::get('/logout', 'pagesController@getLogout');

Route::get('/', 'pagesController@getHome');

Route::get('/about', 'pagesController@getAbout');


Route::post('/contact/submit', 'MessagesController@submit');

Route::post('/login','loginController@login');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
	//only 'admin' can access this
    Route::get('/contact', 'pagesController@getContact'); 
	Route::get('/messages', 'MessagesController@getMessages');
});