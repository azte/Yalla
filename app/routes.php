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

//Ruta de Inicio

Route::get('/', array( 'as'=> 'home', function()
{
	return View::make('home');
}));

//Ruta de Inicio


Route::get('/login', array( 'as'=> 'login', function()
{
	return View::make('login');
}));

Route::get('/logout', [
    'as' => 'logout', 'uses' => 'AuthController@logout'
]);

//Controladores de Login

Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logOut');

// Controladores de Recursos

Route::resource('users','UsersController');
Route::resource('articles', 'ArticlesController');
Route::resource('comments', 'CommentsController');




