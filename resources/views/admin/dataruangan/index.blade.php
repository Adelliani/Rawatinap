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
          Data Ruangan
        </h1>
        </div>
      </section>

    <!-- Brand Logo -->

      <div class="card card-default">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                            <a href="/admin/dataruangan/datagedung" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class="fa fa-building" style="font-size: 40px"></i>
                                Data Gedung
                            </a>
                    </div>
                    <div class="col-4">
                            <a href="/admin/dataruangan/dataruang" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class="fa fa-door-open" style="font-size: 40px"></i>
                                Data Ruang
                            </a>        
                    </div>
                    <div class="col-4">
                            <a href="/admin/dataruangan/datakamar" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                                <i class=" fa fa-bed" style="font-size: 40px"></i>
                                Data Kamar
                            </a>        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-12">
                  <div class="card card-outline card-green">
                    <div class="card-header">
                          Detail Ruangan
                      </div>
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
                                </tr>
                              </thead>
                              <tbody>
                                
                  
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                
                              </tbody>
                  
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
              
              <script>
                      $(function () {
                        $('#table-pasien').DataTable({
                        });
                        $('#table-ruangan').DataTable({
                        });
                      });
              
              
                    </script>
              @endsection