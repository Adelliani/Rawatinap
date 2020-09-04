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
      <a href="{{route('lihatriwayat')}}" class="btn btn-primary btn-sm tambahBtn" ><i class="fa fa-arrow-circle-left"> Kembali</i></a>
    </div>
  </section>

  <div class="card card-default">
    <div class="card-body">
      <div class="row">
        <div class="col-3">
          <a href="/pelayanan/pemeriksaan" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
            <i class="fa fa-stethoscope" style="font-size: 40px"></i>
            Pemeriksaan
          </a>
        </div>
        <div class="col-3">
          <a href="/pelayanan/resepobat" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
            <i class="fa fa-plus-square" style="font-size: 40px"></i>
            Resep Obat
          </a>
        </div>
        <div class="col-3">
          <a href="/pelayanan/diagnosa" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
            <i class=" fa fa-diagnoses" style="font-size: 40px"></i>
            Diagnosa
          </a>
        </div>
        <div class="col-3">
          <a href="/pelayanan/fasilitas" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
            <i class=" fa fa-heartbeat" style="font-size: 40px"></i>
            Fasilitas
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
          </div>
          <div class="col-md-6">
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

            <div class="card card-default">
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jenis Pasien:</label>
                  <div class="col-sm-8">
                    <p class="form-control">{{$rawat_inap->jenis_pasien}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">No BPJS:</label>
                  <div class="col-sm-8">
                    <p class="form-control">{{$rawat_inap->no_bpjs}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama Peserta BPJS:</label>
                  <div class="col-sm-8">
                    <p class="form-control">{{$rawat_inap->nama_pesertabpjs}}</p>
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
                    <p class="form-control">{{$rawat_inap->prosedur_masuk}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Cara Masuk:</label>
                  <div class="col-sm-8">
                    <p class="form-control">{{$rawat_inap->cara_masuk}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Perujuk:</label>
                  <div class="col-sm-8">
                    <p class="form-control">{{$rawat_inap->perujuk}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Dokter RS:</label>
                  <div class="col-sm-8">
                    <p class="form-control">{{$rawat_inap->dokter_rs}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Asal Rujukan:</label>
                  <div class="col-sm-8">
                    <p class="form-control">{{$rawat_inap->asal_rujukan}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Alasan Dirujuk:</label>
                  <div class="col-sm-8">
                    <p class="form-control">{{$rawat_inap->alasan_dirujuk}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection

  @section("extra-script")
  <script src="{{asset("admin_lte/plugins/moment/moment.min.js")}}"></script>
  <script src="{{asset("admin_lte/plugins/moment/locale/id.js")}}"></script>

  <script>
    $(function () {
      moment.locale()


      $("[data-umur]").text(`${
        moment("{{$rawat_inap->tgl_masuk}}").diff(moment("{{$rawat_inap->pasien->tgl_lahir}}"),"years")
      }`)
    });
        
  </script>
  @endsection