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
    return view('auth.login');
});

Auth::routes();
Route::get('/admin', function(){
    return view('admin');
})->name('adminpage');
Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');
Route::get('dashboard', 'Auth\DashboardController@index');
Route::get('history', 'Auth\HistoryController@index');

Route::get('/login', 'AuthController@showFormLogin')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/register','AuthController@showFormRegister')->name('register');
Route::post('/register','AuthController@register');

Route::get('/dashboard', 'DashboardController@index');
// Route::get('/profile', 'ProfileController@index');
// Route::get('/history', 'HistoryController@index');
// Route::get('/refferal', 'ReffController@index');
Route::get('/tiket', 'ProductController@index');
Route::get('/create', 'ProductController@create');
Route::post('/store', 'ProductController@store');
Route::delete('/destroy/{id}', 'ProductController@destroy');
Route::get('/kirim/{id}', 'ProductController@edit');
Route::post('/sendItem', 'ProductController@sendItem');
Route::post('/update/{id}', 'ProductController@update');
// Route::get('/berita', 'NewsController@index');
// Route::get('/contact', 'ContactController@index')->middleware('auth');

Route::resource('/kategori', 'CategoryController')->except(['create', 'show']);



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
