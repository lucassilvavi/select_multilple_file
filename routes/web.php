<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
Route::get('/teste', function () {
    return view('welcome');
});
Route::post('/uploadPhoto', 'FotoController@uploadPhoto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'UploadController@uploadForm');
Route::post('/upload1', 'UploadController@uploadSubmit');
Route::post('/product', 'UploadController@postProduct');
Route::post('/sair', 'UploadController@sair');