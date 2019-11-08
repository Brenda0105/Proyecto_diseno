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
<<<<<<< HEAD
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
=======
    return view('uriel.uriel');
});

Route::get('/uriel', function () {
    return view('uriel.uriel');
});


// Route::get('/test', function () {
//     return view('uriel.test');
// });

#Route::get('/status', 'Uriel\CreditRequestController@account_status2')->name('');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/solicita-tu-credito-coppel', 'Uriel\CreditRequestController@index')->name('credit_request');
Route::get('/te-llamaremos-en-unos-minutos', 'Uriel\CreditRequestController@confirm')->name('confirm_credit_request');
Route::get('/inicar-sesion', 'Uriel\Coppel@login')->name('coppel_login');
Route::post('/solicita-tu-credito-coppel', 'Uriel\CreditRequestController@store')->name('store_credit_request');
Route::post('/iniciar-o-crear-cuenta', 'Uriel\Coppel@loginOrCreateAccount')->name('check_coppel_login');
Route::get('/estado-de-cuenta', 'Uriel\CreditRequestController@account_status2')->name('account_status');
Route::post('actualizar-informacion/{id}', 'Uriel\CreditRequestController@update')->name('update_user_info');
Route::post('actualizar-domicilios/{id}', 'Uriel\CreditRequestController@update2')->name('update_user_delivery');
>>>>>>> 5994ce4db8a505fc7d7106a764d48ebf0622e132
