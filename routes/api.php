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

Route::get('labels','LabelController@index');
Route::get('shows','ShowController@index');
Route::get('shows/today','ShowController@getToday');
Route::get('show/{id}','ShowController@show');
Route::post('show/create','ShowController@create');
Route::post('show/edit/{id}','ShowController@edit');
Route::delete('show/delete/{id}','ShowController@delete');
