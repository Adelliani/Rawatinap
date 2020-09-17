@extends("layouts.no_sidebar")

@section("extra_head")
{{-- Data Table --}}

<link rel="stylesheet" href="{{asset("admin_lte/plugins/select2/css/select2.min.css")}}">
<link rel="stylesheet" href="{{asset("admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet"
  href="{{asset("admin_lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
@endsection

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
                <form class="form-horizontal" id="form-tambah"
                    action="{{route("pemeriksaan.store",["rawatInap"=>$rawat_inap->id_rawatinap])}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group">
                                <label class="col-sm-4">Tanggal:</label>
                                <div class="col-sm-12">
                                    <div class="input-group" id="tanggal-pemeriksaan" data-input-tanggal
                                        data-target-input="nearest">
                                        <input type="text" class="form-control" value="" name="tgl_pemeriksaan"
                                            readonly>
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
                                <div class="col-sm-12">
                                    <div class="input-group" id="jam-pemeriksaan" data-input-jam
                                        data-target-input="nearest">
                                        <input type="text" class="form-control" value="" name="jam_pemeriksaan"
                                            readonly>
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
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="jenis_pemeriksaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 col-form-label">Hasil Pemeriksaan:</label>
                                <div class="col-sm-12">
                                    <textarea name="hasil_pemeriksaan" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
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

@section('extra-script')
<script src="{{asset("admin_lte/plugins/moment/moment.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/select2/js/select2.full.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/select2/js/i18n/id.js")}}"></script>
<script src="{{asset("admin_lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<script>
    $('[data-input-tanggal]').datetimepicker({
      locale:"id",
      format:"YYYY-MM-DD",
      ignoreReadonly:true,
    })

    $('[data-input-jam]').datetimepicker({
      format: 'HH:mm',
      locale:"id",
      ignoreReadonly:true,
    });

</script>
@endsection