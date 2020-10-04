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
        Data Shift
      </h1>
    </div>
  </section>

  <div class="row">
    <div class="col-12">
      <div class="card card-outline card-green">
        <div class="card-header">
          <a href="{{route("shift.create")}}" class="btn btn-primary btn-sm tambahBtn"><i class="fa fa-plus-circle">
              Tambah </i></a>
          <a href="{{route("admin.index")}}" class="btn btn-primary btn-sm tambahBtn"><i class="fa fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
          <table id="table-shift" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Shift</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($shifts as $item)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$item->nama_shift}}</td>
                <td>{{$item->jam_masuk}}</td>
                <td>{{$item->jam_keluar}}</td>
                
                <td>
                  <a href="{{route("shift.edit",["shift"=>$item->id_shift])}}" class="btn btn-primary btn-xs">Edit</a>
                  <button class="btn btn-warning btn-xs btn-hapus"
                    data-action="{{route("shift.destroy",["shift"=>$item->id_shift])}}">Hapus</button>
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
@include('layouts.konfirmasi') 

<!-- DataTables -->
<script src="{{asset("admin_lte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>

<script>
  $(function () {
      $('#table-shift').DataTable({
      });
    });
</script>
@endsection