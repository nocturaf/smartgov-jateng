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


Route::get('/login', 'LoginController@index')->name('login');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil', 'ProfilController@index')->name('profil');
Route::get('/iku-pertanian', 'PertanianController@iku')->name('iku-pertanian');
Route::get('/data-pendukung-pertanian', 'PertanianController@dataPendukung')->name('data-pendukung-pertanian');
Route::get('/social-media', 'SocialMediaController@index')->name('social-media');
Route::get('/e-commerce', 'EcommerceController@index')->name('e-commerce');
Route::get('/try', 'TryController@index')->name('try');
