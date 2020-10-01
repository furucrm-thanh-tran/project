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

Route::get('/', 'App\Http\Controllers\ManagerController@index')->name('index');
Route::get('/tkb/{id}', 'App\Http\Controllers\ManagerController@showtkb')->name('tkb');
Route::get('/list/{id}', 'App\Http\Controllers\ManagerController@showlist')->name('list');



