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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','NavController@login');
Route::get('/home','NavController@home');
Route::get('/movie','NavController@movie');
Route::get('/kategori','NavController@kategori');
Route::get('/genre','NavController@genre');
Route::get('movie/addmovie','NavController@addmovie');
Route::post('/save', 'NavController@savemovie');
Route::get('/movie/editmovie/{id}', 'NavController@editmovie');
Route::put('/update/{id}', 'NavController@updatemovie');
Route::get('/delete/{id}', 'NavController@deletemovie');
Route::post('/ceklogin', 'NavController@ceklogin');
Route::get('/logout', 'NavController@logout');
