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

Route::get('/', function () {
    return view('back.dash');
});
Route::get('/import-bpk', function () {
    return view('back.bpk.import');
});
Route::get('/import-itjen', function () {
    return view('back.itjen.import');
});


Route::resource('esi','UnitEsI');
Route::resource('esii','UnitEsII');;
Route::resource('bpk','TemuanBpkController');;
Route::resource('itjen','TemuanItjenController');;
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


