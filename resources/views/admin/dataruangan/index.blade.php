@extends("layouts.sidebar")

@section("extra-head")
@endsection

@section("content-header")
Data Ruangan
@endsection

@section('sidebar')
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{asset("admin_lte/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem Rawat Inap</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

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
                <li class="nav-header">Data Ruangan</li>
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

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
@endsection