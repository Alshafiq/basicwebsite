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

Route::get('/login', 'PagesController@getLogin');

Route::get('/logout', 'PagesController@getLogout');

Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');


Route::post('/contact/submit', 'MessagesController@submit');

Route::post('/login','LoginController@login');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
	//only 'admin' can access this
    Route::get('/contact', 'PagesController@getContact'); 
	Route::get('/messages', 'MessagesController@getMessages');
});

Route::resource('posts','PostsController');