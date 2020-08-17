@extends("layouts.no_sidebar")

@section("extra_head")
{{-- Data Table --}}
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
@endsection

@section("main_content")
<div class="container-fluid col-11 my-1">
    <section class="content-header">
    <div class="row justify-content-between align-items-center">
        <h1>
          Detail Pelayanan
        </h1>
        </div>
      </section>

      <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                            <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class="fa fa-stethoscope" style="font-size: 40px"></i>
                                Pemeriksaan
                            </a>
                    </div>
                    <div class="col-2">
                            <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class="fa fa-plus-square" style="font-size: 40px"></i>
                                Resep Obat
                            </a>        
                    </div>
                    <div class="col-2">
                            <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class=" fa fa-minus-square" style="font-size: 40px"></i>
                                Retur Obat
                            </a>        
                    </div>
                    <div class="col-2">
                            <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class=" fa fa fa-medkit" style="font-size: 40px"></i>
                                Diagnosa
                            </a>        
                    </div>
                    <div class="col-2">
                            <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class=" fa  fa-heartbeat" style="font-size: 40px"></i>
                                Permintaan Pelayanan
                            </a>        
                    </div>
                    <div class="col-2">
                            <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class=" fa fa-info-circle " style="font-size: 40px"></i>
                                Status Pasien
                            </a>        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-12">
                  <div class="card card-outline card-green">
                    <div class="card-header">
                          Detail Pasien
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card card-default">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Tgl Masuk</label>
                              <div>
                                <input id="tanggal" type="text" class="form-control" value="" name="tgl_masuk" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">No.Rawat Inap</label>
                              <div >
                                <input type="text" class="form-control" name="no_ri" value="" readonly>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                
                    <div class="card card-default">
                        <div class="card-header">
                            Identitas Pasien
                          </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">No.Identitas<sup class="bintang">*</sup>:</label>
                          <div class="col-sm-8">
                            <select name="noreg" id="no_identitas"></select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Nama Pasien<sup class="bintang">*</sup>:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Tempat Lahir<sup class="bintang">*</sup>:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Tanggal Lahir<sup class="bintang">*</sup>:</label>
                          <div class="col-sm-8">
                            <input id="datemask" type="text" class="form-control" name="tgl_lahir" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 control-label">Umur:</label>
                          <div class="col-sm-4">
                            <div class="input-group">
                              <input type="text" readonly class="form-control" id="umurfield" name="umur">
                              <span class="input-group-addon">tahun</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Jenis Kelamin<sup class="bintang">*</sup>:</label>
                          <div class="col-sm-8">
                            <div class="radio">
                              <label class="col-sm-5">
                                <input type="radio" name="jenis_kelamin" value="L" id="jeniskelamin_L">
                                Laki - Laki
                              </label>
                              <label class="col-sm-5">
                                <input type="radio" name="jenis_kelamin" value="P" id="jeniskelamin_P">
                                Perempuan
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 control-label">Agama:</label>
                          <div class="col-sm-8">
                            <select name="agama" class="form-control">
                              <option selected="true" disabled></option>
                              <option value="islam">Islam</option>
                              <option value="krisen">Kristen Protestan</option>
                              <option value="katolik">Katolik</option>
                              <option value="hindu">Hindu</option>
                              <option value="buddha">Buddha</option>
                              <option value="konghucu">Kong Hu Cu</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">Status Perkawinan:</label>
                            <div class="col-sm-8">
                                <select name="status_perkawinan" class="form-control">
                                    <option selected="true" disabled></option>
                                    <option value="belummenikah">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                  </select>
                            </div>
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-4 control-label">Gol Darah:</label>
                          <div class="col-sm-8">
                            <select name="gol_darah" class="form-control">
                              <option selected="true" disabled></option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="AB">AB</option>
                              <option value="O">O</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 control-label">Pendidikan:</label>
                          <div class="col-sm-8">
                            <select name="pendidikan" class="form-control">
                              <option selected="true" disabled></option>
                              <option value="tdktamatsd">Tidak Tamat SD</option>
                              <option value="sd">SD</option>
                              <option value="smp">SMP</option>
                              <option value="sma">SMA</option>
                              <option value="s1">S1</option>
                              <option value="s2">S2</option>
                              <option value="s3">S3</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 control-label">Pekerjaan:</label>
                          <div class="col-sm-8">
                            <select name="pekerjaan" class="form-control">
                              <option selected="tidaktahu" disabled></option>
                              <option value="tidakbekerja">Tidak Bekerja</option>
                              <option value="pns">PNS</option>
                              <option value="karyawanswasta">Karyawan Swasta</option>
                              <option value="pensiunan">Pensiunan</option>
                              <option value="tni">TNI</option>
                              <option value="pedagang">Pedagang</option>
                              <option value="nelayan">Nelayan</option>
                              <option value="petani">Petani</option>
                              <option value="buruh">Buruh</option>
                              <option value="iburumahtangga">Ibu Rumah Tangga</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">Alergi:</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="alergi" value="">
                            </div>
                        </div>
                      </div>
                    </div>
                  
                  <div class="card card-default">
                    <div class="card-header">
                      Keluarga Pasien
                    </div>
                      <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-3 control-label">No. KK:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="no_kk">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 control-label">Nama Keluarga:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="nama_keluarga">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 control-label">Hubungan:</label>
                            <div class="col-sm-9">
                              <select name="hubungan" class="form-control">
                                <option selected="true" disabled></option>
                                <option value="ayah">Ayah</option>
                                <option value="ibu">Ibu</option>
                                <option value="suami">Suami</option>
                                <option value="istri">Istri</option>
                                <option value="anak">Anak</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-body">
                          <div class="form-group row">
                              <label class="col-sm-4 control-label">Provinsi:</label>
                              <div class="col-sm-8">
                                <select class="form-control select2" id="select_prov" name="prov" style="width:100%">
                                  <option selected="true" disabled>Pilih Provinsi</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-4 control-label">Kabupaten:</label>
                            <div class="col-sm-8">
                                <div id="kabupaten">
                                    <select class="form-control select2" id="select_kab" name="kab" style="width:100%">
                                    </select>
                                  </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-4 control-label">Kecamatan:</label>
                            <div class="col-sm-8">
                              <div id="kecamatan">
                                <select class="form-control select2" id="select_kec" name="kec" style="width:100%">
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-4 control-label">Desa:</label>
                            <div class="col-sm-8">
                              <div id="kampung">
                                <select class="form-control select2" id="select_desa" name="desa" style="width:100%">
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-4 control-label">Alamat:</label>
                            <div class="col-sm-8">
                              <textarea name="alamat" class="form-control" rows="3"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-4 control-label">No.HP:</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="no_hp">
                            </div>
                          </div>
                        </div>
                    </div>
                    
                            <div class="card card-default">
                                <div class="card-header">
                                  Rawat Inap
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Gedung<sup class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" name="gedung">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Ruang<sup class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" name="ruangan">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">kamar<sup class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" name="kamar">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-sm-4 col-form-label">No. Tempat Tidur<sup class="bintang">*</sup>:</label>
                                          <div class="col-sm-8">
                                            <input type="text" class="form-control" name="no_tempattidur">
                                          </div>
                                        </div>
                                </div>
                              </div>
                          </div>
        </div>

                    
                  </div>
                </div>
              </div>

              <div class="row">
                    <div class="col-12">
                      <div class="card card-outline card-green">
                        <div class="card-header">
                              Daftar Pasien
                          </div>
                          <div class="card-body">
                              <table id="table-pasien" class="table table-bordered table-hover">
                                  <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Tanggal Pelayanan</th>
                                    <th>Jam Pelayanan</th>
                                    <th>Jenis Pelayanan</th>
                                    <th>Deskripsi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                                  
                                </table>
                          </div>
                        
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modalSiappulang" role="dialog">
                    <div class="modal-dialog modal-ld" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Konfirmasi Pasien Siap Pulang</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <form class="form-horizontal fromPasien" action="" method="post">
                        @csrf
                        <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">No Rawat Inap:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="no_rawatinap" >
                                </div>
                                </div>
        
        
                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Nama Pasien:</label>
                                  <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_pasien" >
                                    </div>
                                </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Kamar:</label>
                                                <div class="col-sm-8">
                                                  <input type="text" class="form-control" name="kamar" >
                                                </div>
                                              </div>
                        Atas nama pasien diatas telah diizinkan pulang?
                           
                        </div>
                        <div class="modal-footer row">
                          <button class="btn bg-green col-2">Ya</button>
                          <button class="btn bg-red col-2">Tidak</button>
                        </div>
                        </div>
                          
                        </div>
                        </div>

                        <div class="modal fade" id="modalPemeriksaan" role="dialog">
                                <div class="modal-dialog modal-ld" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Hasil Pemeriksaan</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form class="form-horizontal fromPasien" action="" method="post">
                                    @csrf
                                    <div class="modal-body">
                                      <div class="form-group row">
                                          <label class="col-sm-4 col-form-label">Tanggal:</label>
                                          <div class="col-sm-8">
                                              <input id="tgl_pemeriksaan" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                          </div>
                                        </div>
                                           <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Jam:</label>
                                            <div class="col-sm-8">
                                                  <input id="jam_pemeriksaan" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                                </div>
                                              </div>
                    
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label">Jenis Pemeriksaan:</label>
                                              <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="jenis_pemeriksaan">
                                                </div>
                                            </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Hasil Pemeriksaan:</label>
                                                            <div class="col-sm-8">
                                                              <input type="text" class="form-control" name="hasil_pemeriksaan" >
                                                            </div>
                                                          </div>
                                       
                                    </div>
                                    <div class="modal-footer row">
                                      <button class="btn bg-green col-2">Simpan</button>
                                      <button class="btn bg-red col-2">Batal</button>
                                    </div>
                                    </div>
                                      
                                    </div>
                                    </div>
                                </div>
                        </div>

                        <div class="modal fade" id="modalResepobat" role="dialog">
                                <div class="modal-dialog modal-ld" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Resep Obat</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form class="form-horizontal fromPasien" action="" method="post">
                                    @csrf
                                    <div class="modal-body">
                                      <div class="form-group row">
                                          <label class="col-sm-4 col-form-label">Tanggal:</label>
                                            <div class="col-sm-8">
                                              <input id="tgl_order" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                            </div>
                                      </div>
                                      <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Jam:</label>
                                                            <div class="col-sm-8">
                                                              <input id="jam_order" type="text" class="form-control" value="" name="jamsekarang" readonly>
                                                            </div>
                                                          </div>
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label">Nama Obat:</label>
                                              <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="nama_obat" >
                                                </div>
                                            </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tujuan Obat:</label>
                                                            <div class="col-sm-8">
                                                              <input type="text" class="form-control" name="tujuan" >
                                                            </div>
                                                          </div>
                                                          <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Jumlah Obat:</label>
                                                                <div class="col-sm-8">
                                                                  <input type="text" class="form-control" name="jumlah_order" >
                                                                </div>
                                                              </div>
                                       
                                    </div>
                                    <div class="modal-footer row">
                                      <button class="btn bg-green col-2">Simpan</button>
                                      <button class="btn bg-red col-2">Batal</button>
                                    </div>
                                    </div>
                                      
                                    </div>
                                    </div>

                                </div>
                            </div>

                            <div class="modal fade" id="modalReturobat" role="dialog">
                                    <div class="modal-dialog modal-ld" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Retur Obat</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form class="form-horizontal fromPasien" action="" method="post">
                                        @csrf
                                        <div class="modal-body">
                                          <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Tanggal:</label>
                                                        <div class="col-sm-8">
                                                          <input id="tgl_pengembalian" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                                        </div>
                                                      </div>
                                          <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Jam:</label>
                                                                <div class="col-sm-8">
                                                                  <input id="jam_pengembalian" type="text" class="form-control" value="" name="jamsekarang" readonly>
                                                                </div>
                                                              </div>
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Alasan Retur:</label>
                                                  <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="alasan" >
                                                    </div>
                                                </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Jumlah Terpakai:</label>
                                                                <div class="col-sm-8">
                                                                  <input type="text" class="form-control" name="jumlah_order" >
                                                                </div>
                                                              </div>
                                        
                                        </div>
                                        <div class="modal-footer row">
                                          <button class="btn bg-green col-2">Simpan</button>
                                          <button class="btn bg-red col-2">Batal</button>
                                        </div>
                                        </div>
                                          
                                        </div>
                                        </div>
    
                                    </div>
                                </div>

                                <div class="modal fade" id="modalDiagnosa" role="dialog">
                                  <div class="modal-dialog modal-ld" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Laporan Diagnosa</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      </div>
                                      <form class="form-horizontal fromPasien" action="" method="post">
                                      @csrf
                                      <div class="modal-body">
                                              <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Tanggal:</label>
                                                      <div class="col-sm-8">
                                                        <input id="tgl_diagnosa" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                                      </div>
                                                    </div>
                                              <div class="form-group row">
                                                              <label class="col-sm-4 col-form-label">Jam:</label>
                                                              <div class="col-sm-8">
                                                                <input id="jam_diagnosa" type="text" class="form-control" value="" name="jamsekarang" readonly>
                                                              </div>
                                                            </div>
                                              <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Jenis Diagnosa:</label>
                                                <div class="col-sm-8">
                                                      <input type="text" class="form-control" name="jenis_diagnosa" >
                                                  </div>
                                              </div>
                                                          <div class="form-group row">
                                                              <label class="col-sm-4 col-form-label">Deskripsi:</label>
                                                              <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="deskripsi" >
                                                              </div>
                                                            </div>
                                      
                                      </div>
                                      <div class="modal-footer row">
                                        <button class="btn bg-green col-2">Simpan</button>
                                        <button class="btn bg-red col-2">Batal</button>
                                      </div>
                                      </div>
                                        
                                      </div>
                                      </div>
  
                                  </div>
                              </div>
        
                                <div class="modal fade" id="modalFasilitas" role="dialog">
                                        <div class="modal-dialog modal-ld" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Penggunaan Fasilitas</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form class="form-horizontal fromPasien" action="" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                    <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tanggal:</label>
                                                            <div class="col-sm-8">
                                                              <input id="tgl_pemakaian" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                                            </div>
                                                          </div>
                                                    <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Jam:</label>
                                                                    <div class="col-sm-8">
                                                                      <input id="jam_pemakaian" type="text" class="form-control" value="" name="jamsekarang" readonly>
                                                                    </div>
                                                                  </div>
                                                    <div class="form-group row">
                                                      <label class="col-sm-4 col-form-label">Jenis Fasilitas:</label>
                                                      <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="nama_pasien" >
                                                        </div>
                                                    </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Alasan:</label>
                                                                    <div class="col-sm-8">
                                                                      <input type="text" class="form-control" name="alasan_pemakaian" >
                                                                    </div>
                                                                  </div>
                                               
                                            </div>
                                            <div class="modal-footer row">
                                              <button class="btn bg-green col-2">Simpan</button>
                                              <button class="btn bg-red col-2">Batal</button>
                                            </div>
                                            </div>
                                              
                                            </div>
                                            </div>
        
                                        </div>
                                    </div>
              @endsection
      
              @section("extra-script")
              <!-- DataTables -->
              <script src="{{asset("admin_lte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
              <script src="{{asset("admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
              <script src="{{asset("admin_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
              <script src="{{asset("admin_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
              
              <script>
                      $(function () {
                        $('#table-pasien').DataTable({
                        });
                        $('#table-ruangan').DataTable({
                        });
                      });
              
              
                    </script>
              @endsection