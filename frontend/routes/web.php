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

Route::view('/', 'home')->name('home');

#Dolar Endpoints

Route::view('mep', 'dolar.mep')->name('mep');
Route::view('ccl', 'dolar.ccl')->name('ccl');


#Bonds endpoints

Route::view('bonds-comparative', 'bonds.bonds-comparative')->name('bonds-comparative');

#Options Endpoints
Route::view('options', 'options.options')->name('options');




#Helpers Endpoints

Route::view('/helpers/dolar', 'helpers.dolar')->name('helper-dolar');
Route::view('/helpers/home-helper', 'helpers.home-helper')->name('helper-home');
Route::view('/helpers/options-helper', 'helpers.options-helper')->name('options-home');