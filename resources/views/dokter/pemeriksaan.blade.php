@extends("layouts.no_sidebar")

@section("main_content")
<div class="container-fluid col-5 my-1">
    <section class="content-header">
        <div class="row justify-content-between align-items-center">
            <h1>
                Hasil Pemeriksaan
            </h1>
        </div>
    </section>

    <div class="content-wrapper">

        <div class="row">
            <div class="col-12">
                    <form class="form-horizontal" id="form-tambah" action="{{route("pemeriksaan.store")}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="form-group">
                                            <label class="col-sm-4">Tanggal:</label>
                                            <div class="col-sm-8">
                                                <div class="input-group" id="tanggal-pemeriksaan" data-input-tanggal
                                                    data-target-input="nearest">
                                                    <input type="text" class="form-control" value="" name="tgl_pemeriksaan" readonly>
                                                    <div class="input-group-append" data-target="#tanggal-pemeriksaan"
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
                                                <div class="input-group" id="jam-pemeriksaan" data-input-jam data-target-input="nearest">
                                                    <input type="text" class="form-control" value="" name="jam_pemeriksaan" readonly>
                                                    <div class="input-group-append" data-target="#jam-pemeriksaan"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4">Jenis Pemeriksaan:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="jenis_pemeriksaan">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 col-form-label">Hasil Pemeriksaan:</label>
                                            <div class="col-sm-8">
                                                <textarea name="hasil_pemeriksaan" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><iclass="fa fa-power-off"></i>Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
