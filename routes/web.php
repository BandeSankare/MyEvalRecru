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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/formulaireCandidat','formulaireCandidatController@index');
Route::post('/store','info_candidatController@store');


Route::get('/question','questionController@index');
Route::post('/store','questionController@store');

Route::get('/test', function () {
    return view('questionnaires.test');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');