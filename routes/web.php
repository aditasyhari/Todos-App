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

// Route::get('todos', 'TodosController@index');
// Route::get('todos/create', 'TodosController@create');
// Route::get('todos/{todo}', 'TodosController@show');
// Route::post('todos', 'TodosController@store');
// Route::delete('todos/{todo}', 'TodosController@destroy');
// Route::get('todos/{todo}/edit', 'TodosController@edit');
// Route::put('todos/{todo}', 'TodosController@update');

Route::resource('todos', 'TodosController');
Route::resource('kendaraans', 'KendaraanController');
Route::resource('laboratoriums', 'LaboratoriumController');

