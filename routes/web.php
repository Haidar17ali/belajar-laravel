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
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = "Haidar Ali";
//     return view('about', ['nama' => $nama]);
// });

// membuat route menuju controller
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// Route::get('/mahasiswa', 'MahasiswaController@index');
// Route::get('/mahasiswa/{student}', 'MahasiswaController@show');
// Route::post('/mahasiswa', 'MahasiswaController@store');
// Route::delete('/mahasiswa/{student}', 'MahasiswaController@destroy');
// Route::get('/mahasiswa/{student}/edit', 'MahasiswaController@edit');
// Route::patch("/mahasiswa/{student}", "MahasiswaController@update");
Route::resource('mahasiswa', 'MahasiswaController');
