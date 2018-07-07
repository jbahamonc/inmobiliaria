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

Route::get('/', 'homeController@home');

Route::prefix('property')->group( function () {
	Route::get('{title}', 'propertyController@show');
    Route::post('search', 'propertyController@index');
	Route::get('type/{type}', 'propertyController@showPropertyByType');
	Route::post('request', 'propertyController@sendRequest');
});

Route::get('acerca', 'aboutController@index');

Route::prefix('servicios')->group( function () {
	Route::get('{type}', 'servicesController@index');
});

Route::get('contacto', 'contactoController@showForm')->name('contacto');
Route::post('send_email', 'mailController@send');

Auth::routes();

Route::get('/dashboard', 'dashboardController@index')->name('dashboard');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
	Route::get('inmuebles', 'propertyController@getAllProperty');
	Route::post('register_property', 'propertyController@store');
	Route::get('inmuebles/{id}', 'propertyController@showProperty')->name('showProperty');
	Route::post('save/{id}', 'propertyController@update');
	Route::post('delete_property', 'detallesController@delete');
	Route::post('delete_img', 'imagenController@delete');
	Route::get('configuracion', 'dashboardController@getAllServices');
	Route::post('services/save', 'servicesController@store')->name('save_service');
	Route::get('services/delete/{id}', 'servicesController@destroy');
	Route::get('tipo/delete/{id}', 'tipoinmuebleController@destroy');
	Route::get('property/delete/{id}', 'propertyController@destroy');
	Route::post('tipo', 'tipoinmuebleController@store');
	Route::get('solicitudes', 'solicitudesController@index');
});
