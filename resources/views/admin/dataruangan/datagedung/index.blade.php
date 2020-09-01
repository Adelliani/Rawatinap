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
        Data Gedung
      </h1>
    </div>
  </section>

  <div class="row">
    <div class="col-12">
      <div class="card card-outline card-green">
        <div class="card-header">
          <button class="btn btn-primary btn-sm tambahBtn"><i class="fa fa-plus-circle" data-toggle="modal"
              data-target="#modalTambahgedung"> Tambah </i></button>
          <a href="{{route('tampildataruangan')}}" class="btn btn-primary btn-sm tambahBtn"><i class="fa fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
          <table id="table-gedung" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Gedung</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($gedungs as $item)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$item->nama_gedung}}</td>
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
</div>

<div class="modal fade" id="modalTambahgedung" role="dialog">
  <div class="modal-dialog modal-l" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Data Gedung</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <form class="form-horizontal" id="form-tambah" action="" method="post">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label class="col-sm-8">Id Gedung:</label>
                <div class="col-sm-15">
                  <input type="number" class="form-control" name="id_gedung" value="" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-8">Nama Gedung:</label>
                <div class="col-sm-15">
                  <input type="text" class="form-control" name="nama_gedung">
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-power-off"></i>
            Batal</button>
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