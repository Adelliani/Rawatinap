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
        Laporan
        </h1>
        </div>
      </section>

      <div class="row">
        <div class="col-12">
          <div class="card card-outline card-green">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Bulan</label>
                                <div>
                                <input id="tanggal" type="text" class="form-control" value="" name="bulan" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Tahun</label>
                                <div >
                                <input type="text" class="form-control" name="tahun" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-default">
                <div class="card-body">
                    <table id="table-laporan" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Rawat Inap</th>
                            <th>Nama Pasien</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Kamar</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Keluar</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($rawat_inaps as $item)

                            <tr>
                              <td>{{$loop->index+1}}</td>
                              <td>{{$item->no_ri}}</td>
                              <td>{{$item->pasien->nama_pasien}}</td>
                              <td>{{$item->pasien->jenis_kelamin}}</td>
                              <td>{{$item->pasien->alamat}}</td>
                              <td>{{$item->kamar->nam_kamar}}</td>
                              <td>{{$item->tgl_masuk}}</td>
                              <td>{{$item->tgl_keluar}}</td>
                              <td>
                                  <a href="" class="btn btn-primary btn-xs">Lihat</a>
                                  <a href="" class="btn btn-warning btn-xs">Hapus</a>
                              </td>
                            </tr>
                            @endforeach
                      </tbody>
                     </table>
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
                        $('#table-laporan').DataTable({
                        });
                      });
              
              
                    </script>
              @endsection