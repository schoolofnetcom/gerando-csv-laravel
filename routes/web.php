<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('users/export/facade', 'UsersController@export');
Route::get('users/export/exportable', 'UsersController@exportable');
Route::get('users/export/query', 'UsersController@exportQuery');
Route::get('users/export/save', 'UsersController@save');


Route::get('users/import', 'UsersController@import');
