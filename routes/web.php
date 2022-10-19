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

//Auth
Route::get('/', ('Landing\LandingController@index'));
Route::get('login', ('AuthController@login'));
Route::get('logout', ('AuthController@logout'));
Route::post('loginProses', ('AuthController@loginProses'));

Route::get('service', ('Landing\ServiceController@index'));

//pengurus harian
Route::get('pengurus_harian', ('Landing\PengurusHarianController@index'));

//departemen 
Route::get('humas', ('Landing\HumasController@index'));

// lembaga
Route::get('sosial', ('Landing\SosialController@index'));
Route::get('dakwah', ('Landing\DakwahController@index'));
