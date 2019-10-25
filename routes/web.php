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
<<<<<<< HEAD
    return view('uriel.uriel');
=======
    return view('uriel');
>>>>>>> 9366250c97e2ca5e25b27dd4723777deaf693485
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
