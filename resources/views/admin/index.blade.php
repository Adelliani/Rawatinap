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
          Halaman Utama
        </h1>
        </div>
      </section>

      <div class="card card-default">
        <div class="card-body">
            <div class="row">
                    <div class="col-2">
                <a href="{{route('tampildataruangan')}}"class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                    <i class=" fa fa-hospital"style="font-size: 40px"></i>
                    Data Ruangan
                </a>
            </div>
                <div class="col-2">
                    <a href="{{route('tampildatadokter')}}" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                        <i class=" fa fa-user-md" style="font-size: 40px"></i>
                        Data Dokter
                    </a>        
            </div>
            <div class="col-1">
                    <a href="{{route('tampildataperawat')}}" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                        <i class=" fa fa-user-nurse" style="font-size: 40px"></i>
                        Data Perawat
                    </a>        
            </div>
            <div class="col-2">
                    <a href="{{route('tampildatapegawai')}}" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                        <i class=" fa fa-user-tie" style="font-size: 40px"></i>
                        Data Pegawai
                    </a>        
            </div>
            <div class="col-1">
                <a href="{{route('tampildatashift')}}" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                    <i class=" fa fa-clock" style="font-size: 40px"></i>
                    Data Shift
                </a>        
          </div>
            <div class="col-2">
                    <a href="{{route('tampildatafasilitas')}}" class="btn btn-app btn-block m-0" style="height: 100px;font-size:14px">
                        <i class=" fa fa-medkit" style="font-size: 40px"></i>
                        Data Fasilitas
                    </a>        
            </div>
            <div class="col-2">
                    <a href="{{route('tampillaporan')}}" class="btn btn-app btn-block m-0" style="height: 100px;font-size:12px">
                        <i class=" fa fa-database" style="font-size: 40px"></i>
                        Laporan
                    </a>        
            </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-hospital-user"></i></span>
      
                <div class="info-box-content">
                  <span class="info-box-text">Jumlah Ruangan</span>
                  <span class="info-box-number">1</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-bed"></i></span>
      
                <div class="info-box-content">
                  <span class="info-box-text">Ruangan Terisi</span>
                  <span class="info-box-number">2</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
      
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
      
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
      
                <div class="info-box-content">
                  <span class="info-box-text">Pasien Yang Sedang Dirawat</span>
                  <span class="info-box-number">0</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-clock"></i></span>
      
                <div class="info-box-content">
                  <span class="info-box-text" id="tanggal"></span>
                  <span class="info-box-number" id="jam"></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>

          <div class="row">
              <div class="col-6">
                <div class="card card-outline card-green">
                  <div class="card-header">
                        Daftar Pegawai
                    </div>
                    <div class="card-body">
                        <table id="table-pegawai" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Jenis Kelamin</th>
                              <th>Posisi</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            
                          </table>
                    </div>
                  
                </div>
              </div>
              <div class="col-6">
                <div class="card card-outline card-green">
                  <div class="card-header">
                    Daftar Perawat
                  </div>
                  <div class="card-body">
                      <table id="table-perawat" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Jenis Kelamin</th>
                          </tr>
                          </thead>
                          <tbody>
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
    $('#table-pegawai').DataTable({
    });
    $('#table-perawat').DataTable({
    });
  });
</script>
@endsection