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
        Data Ruangan
      </h1>
      <div class="row col-4 align-items-center">
        <div class="col-6">
        <button type="button" class="btn btn-danger text-white" data-toggle="modal" data-target="#modalTambah">Tambah Rawat Inap</button>
      </div>
      <div class="col-6">
        <button type="button" class="btn btn-danger text-white" data-toggle="modal" data-target="#modalTambah">Riwayat Rawat Inap</button>
      </div>
    </div>
    </div>
  </section>

  <div class="row">
        <div class="col-12">
          <div class="card card-outline card-green">
            <div class="card-header">
                  Daftar Gedung
              </div>
              <div class="card-body">
                  <table id="table-pasien" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Gedung</th>
                        <th>Ruang</th>
                        <th>Kamar</th>
                        <th>Kasur Tersedia</th>
                      </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      
                    </table>
              </div>
            
          </div>
        </div>
        <div class="col-6">
          <div class="card card-outline card-green">
            <div class="card-header">
              Daftar Pasien
            </div>
            <div class="card-body">
                <table id="table-ruangan" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No Rawat Inap</th>
                      <th>Nama Pasien</th>
                      <th>Ruangan</th>

  
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
            </div>
              
            </div>
      </div>
    </div>

    </div>