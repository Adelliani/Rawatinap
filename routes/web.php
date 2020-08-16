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

Route::get('/pelayanan', "PelayananController@tampil")->name("tampilpelayanan");
Route::get('/pelayanan/riwayat', "PelayananController@lihat")->name("lihatriwayat");
// Route::get('/pelayanan', "PelayananController@konfirmasi")->name("konfirmasi");
Route::post('/pelayanan/riwayat', "PelayananController@simpan")->name("simpanpendaftaran");

Route::get('/dokter', "DokterController@tampil")->name("tampildokter");
Route::get('/dokter/detail', "DokterController@lihat")->name("lihatdetail");
// Route::get('/dokter/detail', "DokterController@simpan")->name("simpantindakan");
// Route::get('/dokter/detail', "DokterController@simpan")->name("simpanresepobat");
// Route::get('/dokter/detail', "DokterController@simpan")->name("simpanreturobat");
// Route::get('/dokter/detail', "DokterController@simpan")->name("simpanpermintaanpelayanan");
// Route::get('/dokter/detail', "DokterController@konfirmasidokter")->name("konfirmasidokter");

Route::get('/superadmin', function () {
    return view('superadmin.index');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/login', function () {
    return view('login');
});