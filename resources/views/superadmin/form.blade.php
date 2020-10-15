@extends("layouts.no_sidebar")

@section("extra_head")
@endsection

@section("main_content")
<div class="container-fluid col-5 my-1">
    <section class="content-header">
        <div class="row justify-content-between align-items-center">
            <h1>
                Data Pelayanan Kesehatan
            </h1>
        </div>
    </section>
    <div class="content-wrapper">
        <div class="card">
            <form class="form-horizontal" action="{{route("poli.store")}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-5">ID Pelayanan Kesehatan:</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" name="id_poli" value="" readonly required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-7">Nama Pelayanan Kesehatan:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="nama_poli" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5">Alamat:</label>
                                <div class="col-sm-12">
                                  <textarea name="alamat" class="form-control" rows="3"></textarea required>
                                </div>
                              </div>
                            <div class="form-group">
                                <label class="col-sm-5">Akreditasi:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="akreditasi" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-stretch justify-content-end">
                    <button type="submit" class="btn btn-primary mx-2"><i class="fa fa-save"></i> Simpan</button>
                    <a href="{{route("superadmin.index")}}" class="btn btn-danger">Batal</a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection