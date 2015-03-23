<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', array( 'as'=> 'home', function()
{
	return View::make('home');
}));

Route::get('/login', array( 'as'=> 'login', function()
{
	return View::make('login');
}));

Route::get('/logout', [
    'as' => 'logout', 'uses' => 'AuthController@logout'
]);

Route::resource('users','UsersController');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logOut');
Route::resource('articles', 'ArticlesController');
Route::resource('comments', 'CommentsController');




