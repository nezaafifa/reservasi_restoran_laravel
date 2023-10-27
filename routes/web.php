<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
//frontend
route::get('/about','\App\Http\Controllers\FrontController@about');
route::get('/menu','\App\Http\Controllers\FrontController@menu');
route::get('/reservation','\App\Http\Controllers\FrontController@reservation');
route::get('/contact_us','\App\Http\Controllers\FrontController@contact_us');
route::get('/chef','\App\Http\Controllers\FrontController@chef');
route::post('/backend/reservation/store','App\Http\Controllers\ReservationController@store');
route::post('/backend/contact/store','App\Http\Controllers\ContactController@store');
//laporanstruk
route::get('/backend/laporan','App\Http\Controllers\LaporanController@index');
route::get('/backend/laporan/cetak','App\Http\Controllers\LaporanController@cetak');

route::get('/login','App\Http\Controllers\LoginController@index')->name('login');
route::post('/login','App\Http\Controllers\LoginController@login');
route::group(['middleware' => 'LoginMiddleware'], function(){
//backend
route::get('/backend_home','\App\Http\Controllers\BackendController@backend_home');
//about
route::get('/backend/about','App\Http\Controllers\BackendController@index')->name('about');
route::get('/backend/about/create','App\Http\Controllers\BackendController@create');
route::post('/backend/about/store','App\Http\Controllers\BackendController@store');
route::get('/backend/about/edit/{id}','App\Http\Controllers\BackendController@edit');
route::post('/backend/about/update/{id}','App\Http\Controllers\BackendController@update');
route::get('/backend/about/destroy/{id}','App\Http\Controllers\BackendController@destroy');
//menu
route::get('/backend/menu','App\Http\Controllers\MenuController@index')->name('menu');
route::get('/backend/menu/create','App\Http\Controllers\MenuController@create');
route::post('/backend/menu/store','App\Http\Controllers\MenuController@store');
route::get('/backend/menu/edit/{id_menu}','App\Http\Controllers\MenuController@edit');
route::post('/backend/menu/update/{id_menu}','App\Http\Controllers\MenuController@update');
route::get('/backend/menu/destroy/{id_menu}','App\Http\Controllers\MenuController@destroy');
//reservation
route::get('/backend/reservation','App\Http\Controllers\ReservationController@index')->name('reservation');
route::get('/backend/reservation/cetak','App\Http\Controllers\ReservationController@cetak');
route::get('/backend/reservation/edit/{id_reservation}','App\Http\Controllers\ReservationController@edit');
route::post('/backend/reservation/update/{id_reservation}','App\Http\Controllers\ReservationController@update');
route::get('/backend/reservation/destroy/{id_reservation}','App\Http\Controllers\ReservationController@destroy');
//contact
route::get('/backend/contact','App\Http\Controllers\ContactController@index')->name('contact');
route::get('/backend/contact/edit/{id}','App\Http\Controllers\ContactController@edit');
route::post('/backend/contact/update/{id}','App\Http\Controllers\ContactController@update');
route::get('/backend/contact/destroy/{id}','App\Http\Controllers\ContactController@destroy');
//chef
route::get('/backend/chef','App\Http\Controllers\ChefController@index')->name('chef');
route::get('/backend/chef/create','App\Http\Controllers\ChefController@create');
route::post('/backend/chef/store','App\Http\Controllers\ChefController@store');
route::get('/backend/chef/destroy/{id}','App\Http\Controllers\ChefController@destroy');
route::post('/backend/chef/update/{id}','App\Http\Controllers\ContactController@update');
route::get('/backend/chef/destroy/{id}','App\Http\Controllers\ContactController@destroy');
//logout
route::get('logout','App\Http\Controllers\LoginController@logout')->name('logout');
});