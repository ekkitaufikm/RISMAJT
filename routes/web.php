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

// tentang risma
Route::get('About', ('Landing\AboutusController@index'));

//pengurus harian
Route::get('pengurus_harian', ('Landing\PengurusHarianController@index'));

//departemen 
Route::get('humas', ('Landing\HumasController@index'));
Route::get('kadiklat', ('Landing\KadiklatController@index'));
Route::get('proad', ('Landing\ProadController@index'));
Route::get('bakmin', ('Landing\BakminController@index'));

// lembaga
Route::get('sosial', ('Landing\SosialController@index'));
Route::get('dakwah', ('Landing\DakwahController@index'));
Route::get('ekonomi', ('Landing\EkonomiController@index'));
Route::get('pers', ('Landing\PersController@index'));
