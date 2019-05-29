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

Auth::routes();

//route naar homepagina van Lotto
Route::get('/', function () {return view('LottoHome');});

//route naar LottoTrekking
Route::get('/Trekking', function () {return view('LottoTrekking');});

//route van LottoTrekking
Route::Post('/Trekking', function () {return view('LottoTrekking');});