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
	return view('auth/login');
});


Auth::routes([
	'register' => false,
	'reset' => false
]);

Route::get('/admin/home',               'HomeController@index')->name('home');
Route::get('/admin/tambah_siswa',       'HomeController@siswa_add')->name('home');
Route::get('/admin/siswa',              'HomeController@siswa')->name('home');
Route::get('/admin/siswa_edit/{id}',    'HomeController@siswa_edit')->name('home');
Route::get('/admin/siswa_hapus/{id}',   'HomeController@siswa_hapus')->name('home');

Route::post('/admin/tambah_siswa/proses',   'HomeController@siswa_add_proses')->name('home');
Route::put('/admin/edit_siswa/proses/{id}', 'HomeController@siswa_edit_proses')->name('home');
