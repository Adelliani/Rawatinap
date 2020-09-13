@extends("layouts.no_sidebar")

@section("main_content")
<div class="container-fluid col-5 my-1">
    <section class="content-header">
        <div class="row justify-content-between align-items-center">
            <h1>
                Laporan Diagnosa
            </h1>
        </div>
    </section>

    <div class="content-wrapper">

        <div class="row">
            <div class="col-12">
                    <form class="form-horizontal" id="form-tambah" action="{{route("diagnosa.store")}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="form-group">
                                        <label class="col-sm-4">Tanggal:</label>
                                            <div class="col-sm-8">
                                                <div class="input-group" id="tanggal-diagnosa" data-input-tanggal
                                                data-target-input="nearest">
                                                    <input type="text" class="form-control" value="" name="tgl_diagnosa" readonly>
                                                        <div class="input-group-append" data-target="#tanggal-diagnosa"
                                                        data-toggle="datetimepicker">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-4">Jam:</label>
                                            <div class="col-sm-8">
                                                <div class="input-group" id="jam-diagnosa" data-input-jam data-target-input="nearest">
                                                    <input type="text" class="form-control" value="" name="jam_diagnosa" readonly>
                                                        <div class="input-group-append" data-target="#jam-diagnosa"
                                                        data-toggle="datetimepicker">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-clock"></i>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-4">Tinggi:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="tinggi">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-4">Berat:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="berat">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-4">Suhu Badan:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="suhubadan">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-4">Hasil Diagnosa:</label>
                                            <div class="col-sm-8">
                                                <textarea name="hasil_diagnosa" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                                <a class="btn btn-default" href="./"><i class="fa fa-power-off"></i>
                                Batal</a>
                            </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
