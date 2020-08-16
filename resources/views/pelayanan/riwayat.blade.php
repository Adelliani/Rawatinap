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
          Riwayat Rawat Inap
        </h1>
        </div>
      </section>

      <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                            <a href="/Admin/datapasien" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class=" fa fa-users" style="font-size: 40px"></i>
                                Tindakan
                            </a>
                    </div>
                    <div class="col-3">
                            <a href="/Admin/dataruangan#" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class=" fa fa-bed" style="font-size: 40px"></i>
                                Resep Obat
                            </a>        
                    </div>
                    <div class="col-3">
                            <a href="/Admin/dataruangan#" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class=" fa fa-bed" style="font-size: 40px"></i>
                                Diagnosa
                            </a>        
                    </div>
                    <div class="col-3">
                            <a href="/Admin/pindahruang" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class=" fa fa-sign-in" style="font-size: 40px"></i>
                                Pelayanan
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
                                <input id="tanggal" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">No.Rawat Inap</label>
                              <div >
                                <input type="text" class="form-control" name="nori" value="" readonly>
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
                            <select name="noreg" id="noreg"></select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Nama Pasien<sup class="bintang">*</sup>::</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="namapasien" id="namapasien" disabled>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Tempat Lahir<sup class="bintang">*</sup>:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="tempatlahir" id="tempatlahir">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Tanggal Lahir<sup class="bintang">*</sup>:</label>
                          <div class="col-sm-8">
                            <input id="datemask" type="text" class="form-control" name="tgllahir" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
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
                                <input type="radio" name="jeniskelamin" value="L" id="jeniskelamin_L">
                                Laki - Laki
                              </label>
                              <label class="col-sm-5">
                                <input type="radio" name="jeniskelamin" value="P" id="jeniskelamin_P">
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
                                <select name="statusperkawinan" class="form-control">
                                    <option selected="true" disabled></option>
                                    <option value="belummenikah">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                  </select>
                            </div>
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-4 control-label">Gol Darah:</label>
                          <div class="col-sm-8">
                            <select name="goldarah" class="form-control">
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
                              <input type="text" class="form-control" name="nohp">
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
                                  <input type="text" class="form-control" name="nokk">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 control-label">Nama:</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="namakeluarga">
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
                                          <label class="col-sm-4 col-form-label">Detail Ruang<sup class="bintang">*</sup>:</label>
                                          <div class="col-sm-8">
                                            <input type="text" class="form-control" name="detailruang">
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Kelas:<sup class="bintang">*</sup></label>
                                            <div class="col-sm-5">
                                              <select name="kelas" class="form-control">
                                                <option value=""></option>
                                                <option value="a">VIP</option>
                                                <option value="b">I</option>
                                                <option value="ab">II</option>
                                                <option value="O">III</option>
                                              </select>
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
                                            <input type="text" class="form-control" name="notempattidur">
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Dokter PJ:</label>
                                            <div class="col-sm-8">
                                              <input type="text" class="form-control" name="dokterpj">
                                            </div>
                                          </div>
                                </div>
                              </div>
                              
                          
                          
                          
                            <div class="card card-default">
                              <div class="card-body">
                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Jenis Pasien:</label>
                                  <div class="col-sm-8">
                                    <select name="jenispasien" class="form-control">
                                      <option value=""></option>
                                      <option value="bpjs">BPJS</option>
                                      <option value="nonbpjs">Non BPJS</option>
                                    </select>
                                  </div>
                                </div>
                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">No BPJS:</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nobpjs">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Nama Peserta BPJS:</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" name="namapesertabjs">
                                      </div>
                                    </div>
                              </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    Kedatangan
                                  </div>
                              <div class="card-body">
                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Prosedur Masuk:</label>
                                  <div class="col-sm-8">
                                    <select name="jenispasien" class="form-control">
                                      <option value=""></option>
                                      <option value="langsung">Langsung</option>
                                      <option value="rujukanigd">Rujukan IGD</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Cara Masuk:</label>
                                  <div class="col-sm-8">
                                    <select name="carabayar" class="form-control">
                                      <option value=""></option>
                                      <option value="datangsendiri">Datang Sendiri</option>
                                      <option value="kontrol">Kontrol</option>
                                      <option value="dokterrs">Dokter RS</option>
                                    </select>
                                  </div>
                                </div>
                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Perujuk:</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" name="perujuk">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Dokter RS:</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" name="dokterrs">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Asal Rujukan:</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" name="asalrujukan">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Alasan Dirujuk:</label>
                                        <div class="col-sm-8">
                                          <select name="alasandirujuk" class="form-control">
                                            <option value=""></option>
                                            <option value="kepentinganmedis">Kepentingan Medis</option>
                                            <option value="fasilitaskurang">Fasilitas Kurang</option>
                                            <option value="permintaansendiri">Permintaan Sendiri</option>
                                            <option value="tempattidurpenuh">Tempat Tidur Penuh</option>
                                          </select>
                                        </div>
                                      </div>
                              </div>
                            </div>
                          </div>
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
                        Apakah Atas Nama Pasien diatas telah diizinkan pulang?
                           
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
                                      <h4 class="modal-title">Pemeriksan</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form class="form-horizontal fromPasien" action="" method="post">
                                    @csrf
                                    <div class="modal-body">
                                            <div class="form-group">
                                                    <label class="form-label">Tgl Pemeriksaan</label>
                                                    <div>
                                                      <input id="tanggal" type="text" class="form-control" value="" name="tgl_pemeriksaan" readonly>
                                                    </div>
                                            <div class="form-group">
                                                            <label class="form-label">Jam Pemeriksaan</label>
                                                            <div>
                                                              <input id="tanggal" type="text" class="form-control" value="" name="jam_pemeriksaan" readonly>
                                                            </div>
                    
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label">Jenis Pemeriksaan:</label>
                                              <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="jenis_pemeriksaan" >
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
                                            <div class="form-group">
                                                    <label class="form-label">Tanggal</label>
                                                    <div>
                                                      <input id="tanggal" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                                    </div>
                                            <div class="form-group">
                                                            <label class="form-label">Jam</label>
                                                            <div>
                                                              <input id="tanggal" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                                            </div>
                    
                                            <div class="form-group row">
                                              <label class="col-sm-4 col-form-label">Nama Obat:</label>
                                              <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="nama_pasien" >
                                                </div>
                                            </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">Tujuan Obat:</label>
                                                            <div class="col-sm-8">
                                                              <input type="text" class="form-control" name="ruangan" >
                                                            </div>
                                                          </div>
                                                          <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Jumlah Obat:</label>
                                                                <div class="col-sm-8">
                                                                  <input type="text" class="form-control" name="ruangan" >
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
                                                <div class="form-group">
                                                        <label class="form-label">Tanggal</label>
                                                        <div>
                                                          <input id="tanggal" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                                        </div>
                                                <div class="form-group">
                                                                <label class="form-label">Jam</label>
                                                                <div>
                                                                  <input id="tanggal" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                                                </div>
                        
                                                <div class="form-group row">
                                                  <label class="col-sm-4 col-form-label">Alasan Retur:</label>
                                                  <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="nama_pasien" >
                                                    </div>
                                                </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-4 col-form-label">Jumlah Terpakai:</label>
                                                                <div class="col-sm-8">
                                                                  <input type="text" class="form-control" name="ruangan" >
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
        
                                <div class="modal fade" id="modalPermintaanpelayanan" role="dialog">
                                        <div class="modal-dialog modal-ld" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Permintaan Pelayanan</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form class="form-horizontal fromPasien" action="" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label class="form-label">Tanggal</label>
                                                            <div>
                                                              <input id="tanggal" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
                                                            </div>
                                                    <div class="form-group">
                                                                    <label class="form-label">Jam</label>
                                                                    <div>
                                                                      <input id="tanggal" type="text" class="form-control" value="" name="tanggalsekarang" readonly>
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
                                                                      <input type="text" class="form-control" name="ruangan" >
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