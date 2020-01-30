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
Route::get('/input-bpk', function () {
    return view('back.bpk.input');
});
Route::get('/input-itjen', function () {
    return view('back.itjen.input');
});
Route::get('/import-bpk', function () {
    return view('back.bpk.import');
});
Route::get('/import-itjen', function () {
    return view('back.itjen.import');
});
Route::get('/add-esi', function () {
    return view('back.unit.esi');
});

Route::resource('esi','UnitEsI')->middleware('auth');
Route::resource('esii','UnitEsII')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


