@extends("layouts.no_sidebar")

@section("extra_head")
{{-- Data Table --}}
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
{{-- select2 --}}
<link rel="stylesheet" href="{{asset("admin_lte/plugins/select2/css/select2.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

@endsection

@section("main_content")
<div class="container-fluid col-11 my-1">
  <section class="content-header">
    <div class="row justify-content-between align-items-center">
      <h1>
        Halaman Utama
      </h1>
      <div class="row col-3 justify-content-end">
        <button type="button" class="btn btn-danger text-white mr-3" data-toggle="modal"
          data-target="#modalTambah">Tambah
          Rawat Inap</button>
        <button type="button" class="btn btn-danger text-white" data-toggle="modal" data-target="#modalTambah">Riwayat
          Rawat Inap</button>
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
          <table id="table-pasien" class="table table-bordered table-hover">
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
                <td>{{$item->jumlahkasur}}</td>
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
          <table id="table-ruangan" class="table table-bordered table-hover">
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
                <td>{{$item->kamar->nama_kamar}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

</div>

{{-- Modularisasi Modal --}}

@include('pelayanan.index.modal_tambah')
@include('pelayanan.index.modal_detail')

@endsection

@section("extra-script")
<!-- DataTables -->
<script src="{{asset("admin_lte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>

{{-- momentjs --}}
<script src="{{asset("admin_lte/plugins/moment/moment.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/moment/locale/id.js")}}"></script>

{{-- select2 --}}
<script src="{{asset("admin_lte/plugins/select2/js/select2.full.min.js")}}"></script>
<script>
  $(function () {

    moment.updateLocale("id")

    $("#select_prov").select2({
      placeholder:"Pilih provinsi",
      theme:"bootstrap4",
      allowClear:true,
      ajax:{
        url:"{{route('api.wilayah.provinsi')}}",
        type:"GET",
        delay:250,
        processResults:function(result){

          var item = result.map((item)=>({
            id:item.id_prov,
            text:item.nama_prov
          }))
          return {
            "results": item
          }
        }
      }
    })

    $("#select_kab").select2({
      placeholder:"Pilih Kabupaten",
      theme:"bootstrap4",
      allowClear:true,
      ajax:{
        url:"{{route('api.wilayah.kabupaten')}}",
        type:"GET",
        delay:250,
        data:function(params){
          return{
            term:params.term,
            provinsi:$("#select_prov").val()
          }
        },
        processResults:function(result){

          var item = result.map((item)=>({
            id:item.id_kab,
            text:item.nama_kab
          }))
          return {
            "results": item
          }
        }
      }
    })


    $("#select_kec").select2({
      placeholder:"Pilih Kecamatan",
      theme:"bootstrap4",
      allowClear:true,
      ajax:{
        url:"{{route('api.wilayah.kecamatan')}}",
        type:"GET",
        delay:250,
        data:function(params){
          return{
            term:params.term,
            kabupaten:$("#select_kab").val()
          }
        },
        processResults:function(result){

          var item = result.map((item)=>({
            id:item.id_kec,
            text:item.nama_kec
          }))
          return {
            "results": item
          }
        }
      }
    })

    $("#select_desa").select2({
      placeholder:"Pilih Desa",
      theme:"bootstrap4",
      allowClear:true,
      ajax:{
        url:"{{route('api.wilayah.desa')}}",
        type:"GET",
        delay:250,
        data:function(params){
          return{
            term:params.term,
            kecamatan:$("#select_kec").val()
          }
        },
        processResults:function(result){

          var item = result.map((item)=>({
            id:item.id_desa,
            text:item.nama_desa
          }))
          return {
            "results": item
          }
        }
      }
    })

    $("#select_gedung").select2({
      placeholder:"Pilih Gedung",
      theme:"bootstrap4",
      allowClear:true,
      ajax:{
        url:"{{route('api.gedung.gedung')}}",
        type:"GET",
        delay:250,
        data:function(params){
          return{
            term:params.term,
            poli:1
          }
        },
        processResults:function(result){

          var item = result.map((item)=>({
            id:item.id_gedung,
            text:item.nama_gedung
          }))
          return {
            "results": item
          }
        }
      }
    })

    $("#select_ruang").select2({
      placeholder:"Pilih Ruang",
      theme:"bootstrap4",
      allowClear:true,
      ajax:{
        url:"{{route('api.gedung.ruang')}}",
        type:"GET",
        delay:250,
        data:function(params){
          return{
            term:params.term,
            gedung:$("#select_gedung").val()
          }
        },
        processResults:function(result){

          var item = result.map((item)=>({
            id:item.id_ruang,
            text:item.nama_ruang
          }))
          return {
            "results": item
          }
        }
      }
    })

    $("#select_kamar").select2({
      placeholder:"Pilih Kamar",
      theme:"bootstrap4",
      allowClear:true,
      ajax:{
        url:"{{route('api.gedung.kamar')}}",
        type:"GET",
        delay:250,
        data:function(params){
          return{
            term:params.term,
            ruang:$("#select_ruang").val()
          }
        },
        processResults:function(result){

          var item = result.map((item)=>({
            id:item.id_kamar,
            text:item.nama_kamar
          }))
          return {
            "results": item
          }
        }
      }
    })

    $('#table-pasien').DataTable({
    });


    $('#table-ruangan').DataTable({
    });

    $("#modalTambah").on("show.bs.modal",function(){
      $("#form-tambah").trigger("reset")
      $("#tanggal").val(moment().format("YYYY-MM-DD"))
      $("#tanggal-display").val(moment().format("dddd, DD MMMM YYYY"))
    })
  });
</script>
@endsection