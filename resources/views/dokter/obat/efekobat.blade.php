@extends("layouts.no_sidebar")

@section("extra_head")
@endsection

@section("main_content")
<div class="container-fluid col-5 my-1">
    <section class="content-header">
        <div class="row justify-content-between align-items-center">
            <h1>
                Efek Obat
            </h1>
        </div>
    </section>

    <div class="content-wrapper">

        <div class="row">
            <div class="col-12">
                <form class="form-horizontal" id="form-tambah"
                    action="{{route("efekobat.store",["rawatInap"=>$rawat_inap->id_rawatinap])}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-sm-4">Nama Obat:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nama_obat" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-sm-4">Efek Obat:</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="efek">
                                    </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-stretch justify-content-end">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            <a class="btn btn-default" href="./"><i class="fa fa-power-off"></i>
                            Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection