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
    return view('home');
});

Route::get("informatika", "dbController@data");
Route::get('informatika/tambah', 'dbController@tambah');
route::post('informatika/tambahDatainf', 'dbController@tambahDatainf');
route::get('informatika/ubah/{no_ujian}', 'dbController@ubah');
route::post('informatika/ubahDatainf', 'dbController@ubahDatainf');
Route::get('informatika/hapus/{no_ujian}','dbController@hapus');

Route::get("statistika", "dbController@datastat");
Route::get('statistika/tambahstat', 'dbController@tambahstat');
route::post('statistika/tambahDatastat', 'dbController@tambahDatastat');
route::get('statistika/ubahstat/{no_ujian}', 'dbController@ubahstat');
route::post('statistika/ubahDatastat', 'dbController@ubahDatastat');
Route::get('statistika/hapusstat/{no_ujian}','dbController@hapusstat');

Route::get("farmasi", "dbController@datafar");
Route::get('farmasi/tambahfar', 'dbController@tambahfar');
route::post('farmasi/tambahDatafar', 'dbController@tambahDatafar');
route::get('farmasi/ubahfar/{no_ujian}', 'dbController@ubahfar');
route::post('farmasi/ubahDatafar', 'dbController@ubahDatafar');
Route::get('farmasi/hapusfar/{no_ujian}','dbController@hapusfar');
