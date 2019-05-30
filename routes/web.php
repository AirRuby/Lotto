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

//authenticatie routes
Auth::routes();

//route naar homepagina van Lotto
Route::get('/','LottoController@Home')->name('Home');

//route naar LottoTrekking
Route::get('/Trekking','LottoController@Trekking')->name('Trekking');

//route van LottoTrekking
route::post('/Trekking','LottoController@LottoTrekking')->name('LottoTrekking');