@extends("layouts.no_sidebar")

@section("extra_head")
@endsection

@section("main_content")
<div class="container-fluid col-11 my-1">
    <section class="content-header">
        <div class="row justify-content-between align-items-center">
            <h1>
                Data Gedung
            </h1>
        </div>
    </section>
    <div class="content-wrapper">
        <div class="card">
            <form class="form-horizontal" action="{{route("gedung.store")}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-8">ID Gedung:</label>
                                <div class="col-sm-15">
                                    <input type="number" class="form-control" name="id_gedung" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-8">Nama Gedung:</label>
                                <div class="col-sm-15">
                                    <input type="text" class="form-control" name="nama_gedung">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <a href="./" class="btn btn-default"><i class=" fa fa-power-off"></i>
                        Batal</a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection