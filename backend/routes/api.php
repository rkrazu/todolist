<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('todos', 'TodosController@index');
Route::get('todos/{todo}', 'TodosController@show');
Route::post('todos', 'TodosController@store');
Route::put('todos/{todo}', 'TodosController@update');
Route::delete('todos/{todo}', 'TodosController@delete');
