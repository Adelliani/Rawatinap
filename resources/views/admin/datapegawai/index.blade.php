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
        Data Pegawai
        </h1>
        </div>
      </section>

      <div class="row">
        <div class="col-12">
          <div class="card card-outline card-green">
            <div class="card-header">
              <button class="btn btn-primary btn-sm tambahBtn"><i class="fa fa-plus-circle" data-toggle="modal"
                data-target="#modalTambahpegawai"> Tambah </i></button>
              <button class="btn btn-primary btn-sm tambahBtn" ><i class="fa fa-arrow-circle-left"> Kembali</i></button>
          </div>
              <div class="card-body">
                  <table id="table-pegawai" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Jenis Kelamin</th>
                        <th>Posisi</th>
                        <th>Shift</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                          @foreach ($pegawais as $item)
                 
                          <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->nama_pegawai}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->posisi}}</td>
                            <td>{{$item->shift}}</td>
            
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

      <div class="modal fade" id="modalTambahpegawai" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Data Pegawai</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
              </div>
              <form class="form-horizontal" id="form-tambah" action="" method="post">
            @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-sm-5">Id Pegawai</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="id_pegawai" value="" readonly>
                    </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-5">Nama Pegawai:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_pegawai">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5">Jenis Kelamin:</label>
                  <div class="col-sm-10">
                    <div class="radio">
                      <label class="col-sm-5">
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">
                        Laki - Laki
                      </label>
                      <label class="col-sm-5">
                        <input type="radio" name="jenis_kelamin" value="Perempuan">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-5">Posisi:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="posisi">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5">No. Telp:</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="notelp">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5">Alamat:</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" rows="3"></textarea>
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-power-off"></i> Batal</button>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
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