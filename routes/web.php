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

use App\Http\Controllers\WilayahApiController;
use App\Provinsi;

Route::get('/test', function () {
    return view("layouts.sidebar");
});

Route::get('/pelayanan', "PelayananController@tampil")->name("tampilpelayanan");
Route::get('/pelayanan/riwayat', "PelayananController@lihat")->name("lihatriwayat");
// Route::get('/pelayanan', "PelayananController@konfirmasi")->name("konfirmasi");
Route::post('/pelayanan/riwayat', "PelayananController@simpan")->name("simpanpendaftaran");
Route::get('/pelayanan/pemeriksaan', "PelayananController@tampilpemeriksaan")->name("tampilpemeriksaan");
Route::get('/pelayanan/resepobat', "PelayananController@tampilresepobat")->name("tampilresepobat");
Route::get('/pelayanan/diagnosa', "PelayananController@tampildiagnosa")->name("tampildiagnosa");
Route::get('/pelayanan/fasilitas', "PelayananController@tampilfasilitas")->name("tampilfasilitas");

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
Route::get('/admin/dataruangan', "AdminController@tampildataruangan")->name("tampildataruangan");
Route::get('/admin/datadokter', "AdminController@tampil")->name("tampildatadokter");
Route::get('/login', function () {
    return view('login');
});

Route::group(['prefix' => 'api', "as" => "api."], function () {

    Route::group(["as" => "wilayah."], function () {
        Route::get('/provinsi', "WilayahApiController@getProvinsi")->name("provinsi");
        Route::get('/kabupaten', "WilayahApiController@getKabupaten")->name("kabupaten");
        Route::get('/kecamatan', "WilayahApiController@getKecamatan")->name("kecamatan");
        Route::get('/desa', "WilayahApiController@getDesa")->name("desa");
    });

    Route::group(['as' => "gedung."], function () {
        Route::get('/poli', "GedungApiController@getPoli")->name("poli");
        Route::get('/gedung', "GedungApiController@getGedung")->name("gedung");
        Route::get('/ruangan', "GedungApiController@getRuangan")->name(("ruang"));
        Route::get('/kamar', "GedungApiController@getKamar")->name("kamar");
    });
});
