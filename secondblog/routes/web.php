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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::post('store', 'HomeController@store');
    Route::get('dashboard/cari', 'HomeController@cari');
    Route::delete('dashboard/{id}', 'HomeController@destroy');
    Route::get('dashboard/{id}/edit', 'HomeController@edit');
    Route::post('dashboard/{id}/prosess', 'HomeController@scoreUpdate');
    Route::post('dashboard/{id}/update', 'HomeController@update');
    Route::get('history', 'HistoryController@index')->name('history');
    Route::get('course', 'CourseController@index')->name('course');
    Route::post('create', 'CourseController@store');
    Route::get('product', 'ProductController@index')->name('product');
    Route::post('updatesys36', 'ProductController@updateSys');
    Route::get('tickets', 'TicketController@index')->name('tickets');
    Route::get('kirim', 'TicketController@kirimTiket');
    Route::post('prosess', 'TicketController@prosess');

    Route::get('logout', 'AuthController@logout')->name('logout');
});