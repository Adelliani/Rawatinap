@extends("layouts.no_sidebar")

@section("main_content")
<div class="container-fluid col-5 my-1">
    <section class="content-header">
        <div class="row justify-content-between align-items-center">
            <h1>
                Edit Profile
            </h1>
        </div>
    </section>

    <div class="content-wrapper">

        <div class="row">
            <div class="col-12">
                <form class="form-horizontal" id="form-tambah" action=""
                    method="post">
                    @csrf
                    @method("PUT")
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-sm-5">Username</label>
                                        <div class="col-sm-12">
                                            <input type="number" class="form-control" name="username"
                                                value="{{$user->username}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">Password Lama:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">Password Baru:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="password_baru">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">Konfirmasi Password:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="konfirmasi_password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-6">Nama Pelayanan Kesehatan:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="nama_poli"
                                                value="{{$user->nama_password}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">Alamat:</label>
                                        <div class="col-sm-12">
                                          <textarea name="alamat" class="form-control" rows="3">"{{$user->alamat}}</textarea>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">Akreditasi:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="akreditasi"
                                                value="{{$user->akreditasi}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-stretch justify-content-end">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                            <a href="{{route("admin.index")}}" class="btn btn-default"><i class=" fa fa-power-off"></i>
                                Batal</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@section("extra-script")

@endsection