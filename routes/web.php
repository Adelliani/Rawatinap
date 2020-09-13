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

Route::group(['prefix' => '/pelayanan'], function () {
    Route::get("", "PelayananHomeController")->name("pelayanan.index");
    Route::resource('', 'RawatInapController')->only(["create", "store"])->names("rawat_inap");
    Route::resource('/riwayat', 'RiwayatController')->only(["index", "show"])->parameters([
        "riwayat" => "rawatInap"
    ]);
});

Route::group(['prefix' => 'admin'], function () {
    Route::get("", "AdminHomeController")->name("admin.index");
    Route::group(['prefix' => 'ruangan'], function () {
        Route::get("", "RuanganHomeController")->name("ruangan.index");
        Route::resource('gedung', 'GedungController')->only(["index", "show", "create", "store","edit","update"]);
        Route::resource('ruang', 'RuangController')->only(["index", "show", "create", "store","edit","update"]);
        Route::resource('kamar', 'KamarController')->only(["index", "show", "create", "store","edit","update"]);
    });
    Route::resource('dokter', 'DokterController')->only(["index", "show", "create", "store","edit","update"]);
    Route::resource('perawat', 'PerawatController')->only(["index", "show", "create", "store","edit","update"]);
    Route::resource('pegawai', 'PegawaiController')->only(["index", "show", "create", "store","edit","update"]);
    Route::resource('fasilitas', 'FasilitasController')->only(["index", "show", "create", "store","edit","update"]);
    Route::resource('shift', 'ShiftController')->only(["index", "show", "create", "store","edit","update"]);
});


Route::resource('dokter', 'DokterPasienController')->names("pasien")->parameters(["dokter" => "rawatInap"]);
Route::resource('dokter.fasilitas', 'DokterFasilitasController')->only(["create","store"])->names("fasilitas")->parameters(["dokter" => "rawatInap"]);
Route::resource('dokter.obat', 'DokterResepObatController')->only(["create","store"])->names("resepobat")->parameters(["dokter" => "rawatInap"]);
Route::resource('dokter.pemeriksaan', 'DokterPemeriksaanController')->only(["create","store"])->names("pemeriksaan")->parameters(["dokter" => "rawatInap"]);
Route::resource('dokter.diagnosa', 'DokterDiagnosaController')->only(["create","store"])->names("diagnosa")->parameters(["dokter" => "rawatInap"]);


// Route::get('/pelayanan', "PelayananController@tampil")->name("tampilpelayanan");
// Route::get('/pelayanan/create', "PelayananController@create");
// Route::post('/pelayanan', "PelayananController@simpan")->name("simpanpelayanan");

// Route::get('/pelayanan/riwayat', "PelayananController@lihatriwayat")->name("lihatriwayat");
// Route::get('/pelayanan/riwayat/{rawat_inap}', "PelayananController@lihatdetailriwayat")->name("lihatdetailriwayat");

// Route::get('/pelayanan/riwayat/{rawat_inap}/pemeriksaan', "PelayananController@tampilpemeriksaan")->name("riwayatpemeriksaan");
// Route::get('/pelayanan/riwayat/{rawat_inap}/resepobat', "PelayananController@tampilresepobat")->name("riwayatresepobat");
// Route::get('/pelayanan/riwayat/{rawat_inap}/diagnosa', "PelayananController@tampildiagnosa")->name("riwayatdiagnosa");
// Route::get('/pelayanan/riwayat/{rawat_inap}/fasilitas', "PelayananController@tampilfasilitas")->name("riwayatfasilitas");

// Route::get('/dokter', "DokterController@tampil")->name("tampildokter");
// Route::get('/dokter/{rawat_inap}', "DokterController@lihat")->name("lihatdetailri");

// Route::post("/dokter/{rawat_inap}/pemeriksaan", "DokterController@simpanpemeriksaan")->name("simpanpemeriksaan");
// Route::post('/dokter/{rawat_inap}/resepobat', "DokterController@simpanresepobat")->name("simpanresepobat");
// Route::post('/dokter/{rawat_inap}/returobat', "DokterController@simpan")->name("simpanreturobat");
// Route::post('/dokter/{rawat_inap}/diagnosa', "DokterController@simpandiagnosa")->name("simpandiagnosa");
// Route::post('/dokter/{rawat_inap}/pelayanan', "DokterController@simpanfasilitas")->name("simpanfasilitas");
// // Route::get('/dokter/detail', "DokterController@konfirmasidokter")->name("konfirmasidokter");

// Route::get('/superadmin', function () {
//     return view('superadmin.index');
// });

// //User Admin
// Route::get('/admin', "AdminController@tampiladmin")->name("tampiladmin");

// Route::get('/admin/dataruangan', "AdminController@tampildataruangan")->name("tampildataruangan");
// Route::get('/admin/dataruangan/datagedung', "AdminController@tampildatagedung")->name("tampildatagedung");
// Route::post('/admin/dataruangan/datagedung', "AdminController@simpandatagedung")->name("simpandatagedung");

// Route::get('/admin/dataruangan/dataruang', "AdminController@tampildataruang")->name("tampildataruang");
// Route::post('/admin/dataruangan/dataruang', "AdminController@simpandataruang")->name("simpandataruang");

// Route::get('/admin/dataruangan/datakamar', "AdminController@tampildatakamar")->name("tampildatakamar");
// Route::post('/admin/dataruangan/datakamar', "AdminController@simpandatakamar")->name("simpandatakamar");

// Route::get('/admin/datadokter', "AdminController@tampildatadokter")->name("tampildatadokter");
// Route::post('/admin/datadokter', "AdminController@simpandatadokter")->name("simpandatadokter");

// Route::get('/admin/datapegawai', "AdminController@tampildatapegawai")->name("tampildatapegawai");
// Route::post('/admin/datapegawai', "AdminController@simpandatapegawai")->name("simpandatapegawai");

// Route::get('/admin/dataperawat', "AdminController@tampildataperawat")->name("tampildataperawat");
// Route::post('/admin/dataperawat', "AdminController@simpandataperawat")->name("simpandataperawat");

// Route::get('/admin/datashift', "AdminController@tampildatashift")->name("tampildatashift");
// Route::post('/admin/datashift', "AdminController@simpandatashift")->name("simpandatashift");

// Route::get('/admin/datafasilitas', "AdminController@tampildatafasilitas")->name("tampildatafasilitas");
// Route::post('/admin/datafasilitas', "AdminController@simpandatafasilitas")->name("simpandatafasilitas");

// Route::get('/admin/laporan', "AdminController@tampillaporan")->name("tampillaporan");

Route::group(['prefix' => 'api', "as" => "api."], function () {

    Route::group(["as" => "wilayah."], function () {
        Route::get('/provinsi', "WilayahApiController@getProvinsi")->name("provinsi");
        Route::get('/kabupaten', "WilayahApiController@getKabupaten")->name("kabupaten");
        Route::get('/kecamatan', "WilayahApiController@getKecamatan")->name("kecamatan");
        Route::get('/desa', "WilayahApiController@getDesa")->name("desa");
    });

    Route::group(['as' => "poli."], function () {
        Route::get('/poli', "PoliApiController@getPoli")->name("poli");
        Route::get('/gedung', "PoliApiController@getGedung")->name("gedung");
        Route::get('/ruangan', "PoliApiController@getRuangan")->name(("ruang"));
        Route::get('/kamar', "PoliApiController@getKamar")->name("kamar");
        Route::get('/shift', "PoliApiController@getShift")->name("shift");

        Route::get('/obat', "PoliApiController@getObat")->name("obat");
        Route::get('/fasilitas', "PoliApiController@getFasilitas")->name("fasilitas");
    });

    Route::get('/dokter', "PersonApiController@getDokter")->name("dokter");
});
