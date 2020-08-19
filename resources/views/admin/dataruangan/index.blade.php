@extends("layouts.sidebar")

@section("extra_head")
{{-- Data Table --}}
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
@endsection

@section("content_header")
    <h4 class="">Data Ruangan</h4>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">
            
            <div id="tabel1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-12"><table id="tabel1" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" aria-describedby="tabel1_info">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama Kamar</th>
              <th>Nama Ruang</th>
              <th>Nama Gedung</th>
              <th>Jumlah Kasur</th>
              <th>Jumlah Kasur Terisi</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
             
                
            
          

            <tr role="row" class="odd">
            <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                      <a href="" class="btn btn-warning btn-xs">Lihat</a>
                      <a href="" class="btn btn-warning btn-xs">Hapus</a>
                      </td>
                </tr>
              
              
              </tbody>
          </table></div></div>
          <!-- /.box -->
        </div>
@endsection
    