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
          <button type="button" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px"
            data-toggle="modal" data-target="#modalPemeriksaan">
            <i class="fa fa-stethoscope" style="font-size: 40px"></i>
            Pemeriksaan
          </button>
        </div>
        <div class="col-2">
          <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px" data-toggle="modal"
            data-target="#modalResepobat">
            <i class="fa fa-plus-square" style="font-size: 40px"></i>
            Resep Obat
          </a>
        </div>
        <div class="col-2">
          <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px" data-toggle="modal"
            data-target="#modalReturobat">
            <i class=" fa fa-minus-square" style="font-size: 40px"></i>
            Retur Obat
          </a>
        </div>
        <div class="col-2">
          <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px" data-toggle="modal"
            data-target="#modalDiagnosa">
            <i class=" fa fa fa-medkit" style="font-size: 40px"></i>
            Diagnosa
          </a>
        </div>
        <div class="col-2">
          <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px" data-toggle="modal"
            data-target="#modalFasilitas">
            <i class=" fa  fa-heartbeat" style="font-size: 40px"></i>
            Permintaan Pelayanan
          </a>
        </div>
        <div class="col-2">
          <a href="" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px" data-toggle="modal"
            data-target="#modalSiappulang">
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
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-default">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Tgl Masuk</label>
                        <div>
                          <p class="form-control">{{$rawat_inap->tgl_masuk}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">No.Rawat Inap</label>
                        <div>
                          <p class="form-control">{{$rawat_inap->no_ri}}</p>
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
                      <p class="form-control">{{$rawat_inap->pasien->no_identitas}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama Pasien<sup class="bintang">*</sup>:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->nama_pasien}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tempat Lahir<sup class="bintang">*</sup>:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->tempat_lahir}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tanggal Lahir<sup class="bintang">*</sup>:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->tgl_lahir}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Umur:</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <p class="form-control" data-umur></p>
                        <span class="input-group-append">
                          <span class="input-group-text">
                            Tahun
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Jenis Kelamin<sup class="bintang">*</sup>:</label>
                    <div class="col-sm-8">
                      <div class="radio">
                        <p class="form-control">{{$rawat_inap->jenis_kelamin=="laki-laki"?"Laki-laki":"Perempuan"}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Agama:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->agama}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Status Perkawinan:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->status_perkawinan}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Gol Darah:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->gol_darah}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Pendidikan:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->pendidikan}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Pekerjaan:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->pekerjaan}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Alergi:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->alergi}}</p>
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
                      <p class="form-control">{{$rawat_inap->pasien->no_kk}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 control-label">Nama Keluarga:</label>
                    <div class="col-sm-9">
                      <p class="form-control">{{$rawat_inap->pasien->nama_keluarga}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 control-label">Hubungan:</label>
                    <div class="col-sm-9">
                      <p class="form-control">{{$rawat_inap->pasien->hubungan}}</p>
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
                      <div id="provinsi">
                        <p class="form-control">{{$rawat_inap->pasien->desa->kecamatan->kabupaten->provinsi->nama_prov}}
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Kabupaten:</label>
                    <div class="col-sm-8">
                      <div id="kabupaten">
                        <p class="form-control">{{$rawat_inap->pasien->desa->kecamatan->kabupaten->nama_kab}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Kecamatan:</label>
                    <div class="col-sm-8">
                      <div id="kecamatan">
                        <p class="form-control">{{$rawat_inap->pasien->desa->kecamatan->nama_kec}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Desa:</label>
                    <div class="col-sm-8">
                      <div id="kampung">
                        <p class="form-control">{{$rawat_inap->pasien->desa->nama_desa}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">Alamat:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->alamat}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 control-label">No.HP:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->pasien->no_hp}}</p>
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
                      <p class="form-control">{{$rawat_inap->kamars[0]->ruang->gedung->nama_gedung}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Ruang<sup class="bintang">*</sup>:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->kamars[0]->ruang->nama_ruang}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">kamar<sup class="bintang">*</sup>:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->kamars[0]->nama_kamar}}</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">No. Tempat Tidur<sup class="bintang">*</sup>:</label>
                    <div class="col-sm-8">
                      <p class="form-control">{{$rawat_inap->kamars[0]->pivot->no_tempattidur}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>des


      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card card-outline card-green">
        <div class="card-header">
          Daftar Pelayanan Pasien
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
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
        </div>
        <form class="form-horizontal fromPasien" action="" method="post">
          @csrf
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">No Rawat Inap:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="no_rawatinap">
              </div>
            </div>


            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Nama Pasien:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="nama_pasien">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Kamar:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="kamar">
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
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
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
                <input type="text" class="form-control" name="hasil_pemeriksaan">
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
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
              <input type="text" class="form-control" name="nama_obat">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tujuan Obat:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="tujuan">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jumlah Obat:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="jumlah_order">
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
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
              <input type="text" class="form-control" name="alasan">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jumlah Terpakai:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="jumlah_order">
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
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
              <input type="text" class="form-control" name="jenis_diagnosa">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Deskripsi:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="deskripsi">
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
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
              <input type="text" class="form-control" name="nama_pasien">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Alasan:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="alasan_pemakaian">
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

@section("extra-script")
<script src="{{asset("admin_lte/plugins/moment/moment.min.js")}}"></script>

<script>
  $(function () {
    $("[data-umur]").text(`${
    moment("{{$rawat_inap->tgl_masuk}}").diff(moment("{{$rawat_inap->pasien->tgl_lahir}}"),"years")
    }`)
  
    $('#table-pasien').DataTable({
    });
    $('#table-ruangan').DataTable({
    });
  });
</script>
@endsection