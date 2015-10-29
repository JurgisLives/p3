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




Route::get('/', 'p3Controller@getIndex');

Route::post('/usergenerator', 'UserController@postUsers');
Route::get('/usergenerator', 'UserController@getUsers');


Route::post('/loremipsum', 'TextController@postText');
Route::get('/loremipsum', 'TextController@getText');