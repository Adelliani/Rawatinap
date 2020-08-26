@extends("layouts.no_sidebar")

@section("extra_head")
{{-- Data Table --}}
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
@endsection

<<<<<<< HEAD
@section("main_content")
<div class="container-fluid col-11 my-1">
    <section class="content-header">
    <div class="row justify-content-between align-items-center">
        <h1>
          Data Ruangan
        </h1>
        </div>
      </section>
=======
@section("content-header")
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Hello World</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">General Form</li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('sidebar')
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-lightblue navbar-dark">
        <img src="{{asset("admin_lte/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold text-white">Sistem Rawat Inap</span>
    </a>
>>>>>>> 47cfe3514f02ae8ed4aeb408c65e0b4b26545b1f

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

<<<<<<< HEAD
                    
                  </div>
                </div>
              
=======
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item ">
                    <a href="../calendar.html" class="nav-link active">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-header p-1">DATA RUANGAN</li>
                <li class="nav-item">
                    <a href="../calendar.html" class="nav-link">
                        <i class="nav-icon fa fa-hospital"></i>
                        <p>
                            Gedung
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
                        <i class="nav-icon fa fa-hospital"></i>
                        <p>
                            Ruangan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../gallery.html" class="nav-link">
                        <i class="nav-icon fa fa-bed"></i>
                        <p>
                            Poli
                        </p>
                    </a>
                </li>
>>>>>>> 47cfe3514f02ae8ed4aeb408c65e0b4b26545b1f

        
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