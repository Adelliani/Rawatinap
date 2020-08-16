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
        Pemeriksaan
        </h1>
        </div>
      </section>

      <div class="row">
        <div class="col-12">
          <div class="card card-outline card-green">
            <div class="card-header">
                  Daftar Pemeriksaan
                  <button class="btn btn-primary btn-sm tambahBtn" ><i class="fa fa-arrow-circle-left"></i> Kembali</button>
              </div>
              <div class="card-body">
                  <table id="table-pasien" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>Jam Pemeriksaan</th>
                        <th>Jenis Pemeriksaan</th>
                        <th>Hasil Pemeriksaan</th>
                      </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      
                    </table>
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
                        $('#table-pasien').DataTable({
                        });
                        $('#table-ruangan').DataTable({
                        });
                      });
              
              
                    </script>
              @endsection