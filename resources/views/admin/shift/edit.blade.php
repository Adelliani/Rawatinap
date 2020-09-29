@extends("layouts.no_sidebar")

@section("extra_head")
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet"
  href="{{asset("admin_lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
@endsection

@section("main_content")
<div class="container-fluid col-5 my-1">
  <section class="content-header">
    <div class="row justify-content-between align-items-center">
      <h1>
        Data Shift
      </h1>
    </div>
  </section>

  <div class="row">
    <div class="col-12">
      <div class="card">
      <form class="form-horizontal" id="form-tambah" action="{{route("shift.store")}}" method="post">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-sm-5">Id Shift</label>
                  <div class="col-sm-12">
                    <input type="number" class="form-control" name="id_shift" value="{{$shift->id_shift}}" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5">Nama Shift:</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nama_shift" value="{{$shift->nama_shift}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5">Jam Masuk:</label>
                    <div class="col-sm-12">
                        <div class="input-group" id="jam-masuk" data-input-jam
                            data-target-input="nearest">
                            <input type="text" class="form-control" value="" name="jam_masuk">
                                <div class="input-group-append" data-target="#jam-masuk"
                                  data-toggle="datetimepicker">
                                      <div class="input-group-text">
                                          <i class="fa fa-clock"></i>
                                      </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5">Jam Keluar:</label>
                    <div class="col-sm-12">
                        <div class="input-group" id="jam-keluar" data-input-jam
                            data-target-input="nearest">
                            <input type="text" class="form-control" value="" name="jam_keluar" >
                                <div class="input-group-append" data-target="#jam-keluar"
                                  data-toggle="datetimepicker">
                                      <div class="input-group-text">
                                          <i class="fa fa-clock"></i>
                                      </div>
                                </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-stretch justify-content-end">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <a href="{{route("shift.index")}}" class="btn btn-default"><i class="fa fa-power-off"></i>
              Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection

@section('extra-script')
<script src="{{asset("admin_lte/plugins/moment/moment.min.js")}}"></script>
<script src="{{asset("admin_lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<script>
    $('#jam_masuk').datetimepicker({
      locale:"id",
      format:"HH:mm",
      defaultDate:moment("{{$shift->jam_masuk}}", "HH:mm"),
      ignoreReadonly:true,
    })

    $('#jam_keluar').datetimepicker({
      locale:"id",
      defaultDate:moment("{{$shift->jam_keluar}}", "HH:mm"),
      format:"HH:mm",
      ignoreReadonly:true,
    })

</script>
@endsection
