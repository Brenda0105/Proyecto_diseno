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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/uriel', function () {
    return view('uriel.uriel');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/solicita-tu-credito-coppel', 'CreditRequestController@index')->name('credit_request');
Route::get('/te-llamaremos-en-unos-minutos', 'CreditRequestController@confirm')->name('confirm_credit_request');
Route::get('/inicar-seson', 'Coppel@login')->name('coppel_login');
Route::post('/solicita-tu-credito-coppel', 'CreditRequestController@store')->name('store_credit_request');
Route::post('/iniciar-o-crear-cuenta', 'Coppel@loginOrCreateAccount')->name('check_coppel_login');
