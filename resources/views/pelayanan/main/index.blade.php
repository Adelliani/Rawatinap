@extends("layouts.no_sidebar")

@section("extra_head")
{{-- Data Table --}}
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
{{-- select2 --}}
<link rel="stylesheet" href="{{asset("admin_lte/plugins/select2/css/select2.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet"
  href="{{asset("admin_lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">

@endsection

@section("main_content")
<div class="container-fluid col-11 my-1">
  <section class="content-header">
    <div class="row justify-content-between align-items-center">
      <h1>
        Halaman Utama
      </h1>
      <div class="row col-3 justify-content-end">
        <a href="{{route('rawat_inap.create')}}" class="btn btn-danger text-white mr-3">Tambah Rawat Inap</a>
        <a href="{{route('riwayat.index')}}" class="btn btn-danger text-white mr-3">Riwayat Rawat Inap</a>
      </div>
    </div>
  </section>

  <div class="row">
    <div class="col-6">
      <div class="card card-outline card-green">
        <div class="card-header">
          Daftar Kamar
        </div>
        <div class="card-body">
          <table id="table-ruangan" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Gedung</th>
                <th>Ruang</th>
                <th>Kamar</th>
                <th>Kasur Tersedia</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kamars as $item)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$item->ruang->gedung->nama_gedung}}</td>
                <td>{{$item->ruang->nama_ruang}}</td>
                <td>{{$item->nama_kamar}}</td>
                <td>{{$item->jumlah_kasur-$item->kasur_terisi}}</td>
              </tr>
              @endforeach
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
          <table id="table-pasien" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>No Rawat Inap</th>
                <th>Nama Pasien</th>
                <th>Kamar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($rawat_inaps as $item)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$item->no_ri}}</td>
                <td>{{$item->pasien->nama_pasien}}</td>
                {{-- <td></td> --}}
                <td>{{count($item->kamars)>0?$item->kamars[0]->nama_kamar:""}}</td>
                @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

</div>

{{-- Modularisasi Modal --}}

{{-- @include('pelayanan.index.modal_detail') --}}

@endsection

@section("extra-script")
<!-- DataTables -->
<script src="{{asset("admin_lte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>

<script>
  $(function () {

    // moment.updateLocale("id")

    $('#table-pasien').DataTable({
    });


    $('#table-ruangan').DataTable({
    });


  });


</script>
@endsection