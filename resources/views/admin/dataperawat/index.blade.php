@extends("layouts.no_sidebar")

@section("extra_head")
{{-- Data Table --}}
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/select2/css/select2.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
@endsection

@section("main_content")
<div class="container-fluid col-11 my-1">
  <section class="content-header">
    <div class="row justify-content-between align-items-center">
      <h1>
        Data Perawat
      </h1>
    </div>
  </section>

  <div class="row">
    <div class="col-12">
      <div class="card card-outline card-green">
        <div class="card-header">
          <button class="btn btn-primary btn-sm tambahBtn"><i class="fa fa-plus-circle" data-toggle="modal"
              data-target="#modalTambahperawat"> Tambah </i></button>
          <a href="{{route('tampiladmin')}}" class="btn btn-primary btn-sm tambahBtn"><i
              class="fa fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
          <table id="table-perawat" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Perawat</th>
                <th>Jenis Kelamin</th>
                <th>Shift</th>
              </tr>
            </thead>
            <tbody>
            </tbody>

          </table>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="modalTambahperawat" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Data Perawat</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
        </div>
        <form class="form-horizontal" id="form-tambah" action="" method="post">
          @csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-5">Id Perawat</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="id_perawat" value="" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5">Nama Perawat:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_perawat">
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
                <div class="form-group">
                  <label class="col-sm-5">Shift:</label>
                  <div class="col-sm-10">
                    <select id="select_shift"></select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
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
  <script src="{{asset("admin_lte/plugins/select2/js/select2.full.min.js")}}"></script>
  <script src="{{asset("admin_lte/plugins/select2/js/i18n/id.js")}}"></script>

  <script>
    $(function () {
      $('#table-perawat').DataTable({
        });
      });

      function shift_format(shift){

        if (shift.loading){
          return shift.text;
        }

        var $view = $(`
          <div class="d-flex justify-content-between">
            <p>${shift.text}</p>
            <span class="d-flex">
              <p>${shift.jam_masuk}</p>
              <p>-</p>
              <p>${shift.jam_keluar}</p>
            </span>
          </div>
        `)
        return $view;
      }
      function shift_select_format (shift) {
        if (shift.jam_masuk==null){
          return shift.text;
        }else{
        return `${shift.text} ( ${shift.jam_masuk}-${shift.jam_keluar} )`;
      }
      }

      $("#select_shift").select2({
      language:"id",
      placeholder:"Pilih Shift",
      theme:"bootstrap4",
      allowClear:true,
      minimumResultsForSearch: Infinity,
      ajax:{
        url:"{{route('api.poli.shift')}}",
        type:"GET",
        delay:250,
        data:function(params){
          return{
            poli:1
          }
        },
        processResults:function(result){

          var item = result.map((item)=>({
            id:item.id_shift,
            text:item.nama_shift,
            jam_masuk:item.jam_masuk,
            jam_keluar:item.jam_keluar
          }))
          return {
            "results": item
          }
        }
      },
      templateResult:shift_format,
      templateSelection:shift_select_format
    })
              
              
  </script>
  @endsection