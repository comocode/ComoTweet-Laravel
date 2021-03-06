<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controller('auth','Auth\AuthController');
Route::controller('password','Auth\PasswordController');

Route::get('/', ['as'=>'casa','uses'=>'CasaController@index']);

Route::get('/feed', ['as'=>'feed','uses'=>'FeedController@index']);

Route::group(['prefix'=>'api/v1'], function(){
   Route::resource('tweets','TweetController');
});

Route::get('/@{username}', ['as'=>'perfil','uses'=>'PerfilController@index']);

