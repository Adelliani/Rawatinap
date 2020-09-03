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
        Data Kamar
      </h1>
    </div>
  </section>

  <div class="row">
    <div class="col-12">
      <div class="card card-outline card-green">
        <div class="card-header">
          <button class="btn btn-primary btn-sm tambahBtn"><i class="fa fa-plus-circle" data-toggle="modal"
              data-target="#modalTambahkamar"> Tambah </i></button>
          <a href="{{route('tampildataruangan')}}" class="btn btn-primary btn-sm tambahBtn"><i
              class="fa fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
          <table id="table-kamar" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kamar</th>
                <th>Kelas</th>
                <th>Nama Ruang</th>
                <th>Jumlah Kasur</th>
                <th>Harga</th>
                <th>fasilitas</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kamars as $item)

              <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$item->nama_kamar}}</td>
                <td>{{$item->kelas}}</td>
                <td>{{$item->ruang->nama_ruang}}</td>
                <td>{{$item->jumlah_kasur}}</td>
                <td>{{$item->harga_kamar}}</td>
                <td>{{$item->fasilitas}}</td>
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

      <div class="modal fade" id="modalTambahkamar" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Data Kamar</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
              </div>
              <form class="form-horizontal" id="form-tambah" action="" method="post">
            @csrf
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                          <label class="col-sm-5">Id Kamar:</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" name="id_kamar" value="" readonly>
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5">Nama Kamar:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama_kamar">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-5">Kelas:</label>
                      <div class="col-sm-10">
                        <select name="kelas" class="form-control">
                          <option value=""></option>
                          <option value="VIP">VIP</option>
                          <option value="I">I</option>
                          <option value="II">II</option>
                          <option value="III">III</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-5">Nama Gedung:</label>
                      <div class="col-sm-10">
                          <div id="gedung">
                              <select class="form-control" id="select_gedung" name="id_gedung" >
                              </select>
                            </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-5">Nama Ruang:</label>
                  <div class="col-sm-10">
                    <div id="ruang">
                      <select class="form-control" id="select_ruang" name="id_ruang">
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5">Jumlah Kasur:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_kasur">
                  </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-5">Harga:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga_kamar">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5">Fasilitas:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fasilitas">
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

  {{-- select2 --}}
  <script src="{{asset("admin_lte/plugins/select2/js/select2.full.min.js")}}"></script>
  <script src="{{asset("admin_lte/plugins/select2/js/i18n/id.js")}}"></script>

  <script>
    $(function () {

      $("#select_gedung").select2({
      language:"id",
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
      language:"id",
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
      
          $('#table-kamar').DataTable({
          });


        });
      
      
  </script>
  @endsection