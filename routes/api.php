<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('/posts', 'PostController@all');
// Route::get('/posts/{post}', 'PostController@single');
Route::apiResource('posts', 'PostController');
// Route::get('/test/{id}', ['uses' => 'TestModelController@getSpecificTest']);
// Route::post('/posttest', ['uses' => 'TestModelController@postTest']);
// Route::put('/test/{id}', ['uses' => 'TestModelController@putTest']);
// Route::delete('/test/{id}', ['uses' => 'TestModelController@deleteTest']);