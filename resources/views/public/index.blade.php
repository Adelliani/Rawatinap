@extends("layouts.no_sidebar")

@section("extra_head")
{{-- Data Table --}}
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">

<link rel="stylesheet" href="{{asset("admin_lte/plugins/daterangepicker/daterangepicker.css")}}">

@endsection

@section("main_content")
<div class="container-fluid col-11 my-1">
  <section class="content-header">
    <div class="row justify-content-between align-items-center">
      <h1>
        Data Ruangan
      </h1>
      <a href="" class="btn btn-primary btn-sm tambahBtn"><i class="fa fa-arrow-circle-left">
          Kembali</i></a>
    </div>
  </section>

  <div class="row">
    <div class="col-12">
      <div class="card card-outline card-green">
        <div class="card card-default">
          <div class="card-body">
            <div class="row justify-content-start">
              <div class="col-md-3">
                <form action="" method="GET">
                  <div class="form-group">
                    <label>Nama Pelayanan Kesehatan:</label>
                    <div class="col-sm-12">
                      <select id="select_poli" style="width: 100%" name="id_poli"></select>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-default">
        <div class="card-body">
          <table id="table-ruangan" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kamar</th>
                <th>Nama Ruang</th>
                <th>Nama Gedung</th>
                <th>Jumlah Kasur</th>
                <th>Jumlah Kasur Terisi</th>
                <th>Fasilitas</th>
              </tr>
            </thead>
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

<script src="{{asset("admin_lte/plugins/moment/moment.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/moment/locale/id.js")}}"></script>

<!-- date-range-picker -->
<script src="{{asset("admin_lte/plugins/daterangepicker/daterangepicker.js")}}"></script>

<script>
  moment.locale();
    $(function () {
      $("#select_poli").select2({
        language:"id",
        placeholder:"Pilih Provinsi",
        theme:"bootstrap4",
        allowClear:true,
        ajax:{
          url:"{{route('api.poli.poli')}}",
          type:"GET",
          delay:250,
          processResults:function(result){

            var item = result.map((item)=>({
              id:item.id_poli,
              text:item.nama_poli
            }))
            return {
              "results": item
            }
          }
        }
      })

      var t = $('#table-ruangan').DataTable({
        columns:[
          null,
          {data:"nama_kamar"},
          {data:"ruang.nama_ruang"},
          {data:"ruang.gedung.nama_gedung"},
          {data:"jumlah_kasur"},
          {data:"kasur_terisi"},
          {data:"fasilitas"},
        ]
      });

      t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
      }).draw();

      $("#select_poli").on("change",function(e){
        t.ajax.url(
          `{{route('api.poli.kamar_poli')}}?poli=${e.value}`
        ).reload()
      })
    });          
</script>
@endsection