<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ----- User -----
// GET: index
Route::get('/users', [
    'uses' => 'UserController@index',
    'as' => 'users.index'
]);
// GET: create
Route::get('/users/create', [
    'uses' => 'UserController@create',
    'as' => 'users.create'
]);
// POST: store
Route::post('/users', [
    'uses' => 'UserController@store',
    'as' => 'users.store'
]);
// GET: show
Route::get('/users/{id}', [
    'uses' => 'UserController@show',
    'as' => 'users.show'
]);
// GET: edit
Route::get('/users/{id}/edit', [
    'uses' => 'UserController@edit',
    'as' => 'users.edit'
]);
// PUT/PATCH: update
Route::put('/users/{id}', [
    'uses' => 'UserController@update',
    'as' => 'users.update'
]);
// DELETE: destroy
Route::delete('/users/{id}', [
    'uses' => 'UserController@delete',
    'as' => 'users.destroy'
]);

// ----- Post -----