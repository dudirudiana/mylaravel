<?php

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

use Illuminate\Support\Facades\Route;

//Route Statis
Route::get('/', 'Welcome@index');
Route::get('/layout/main', 'Layout@index');
Route::get('/dasboard', 'PagesController@dasboard');
Route::get('/about', 'PagesController@about');

// Route Siswa
Route::get('/siswa', 'Siswa@index');
Route::post('/siswa/create', 'Siswa@create');

// Route Guru
Route::get('/guru', 'Guru@index');