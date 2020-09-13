@extends("layouts.no_sidebar")

@section("main_content")
<div class="container-fluid col-11 my-1">
    <section class="content-header">
        <div class="row justify-content-between align-items-center">
            <h1>
                Data Dokter
            </h1>
        </div>
    </section>

    <div class="content-wrapper">

        <div class="row">
            <div class="col-12">
                <form class="form-horizontal" id="form-tambah" action="{{route("dokter.update",["dokter"=>$dokter])}}"
                    method="post">
                    @csrf
                    @method("PUT")
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-5">Id Dokter</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="id_dokter"
                                                value="{{$dokter->id_dokter}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">Nama Dokter:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama_dokter"
                                                value="{{$dokter->nama_dokter}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">Jenis Kelamin:</label>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label class="col-sm-5">
                                                    <input type="radio" name="jenis_kelamin" value="Laki-laki"
                                                        {{$dokter->jenis_kelamin=="laki-laki"?"checked":""}}>
                                                    Laki - Laki
                                                </label>
                                                <label class="col-sm-5">
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan"
                                                        {{$dokter->jenis_kelamin=="perempuan"?"checked":""}}>
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">Jenis Dokter:</label>
                                        <div class="col-sm-10">
                                            <select id="jenis_dokter" name="jenis_dokter" class="form-control">
                                                <option value=""></option>
                                                <option {{$dokter->jenis_dokter=="umum"?"selected":""}} value="umum">
                                                    Umum</option>
                                                <option {{$dokter->jenis_dokter=="spesialis"?"selected":""}}
                                                    value="spesialis">Spesialis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-5">Spesialisasi:</label>
                                        <div class="col-sm-10">
                                            <input id="spesialisasi" type="text" class="form-control"
                                                name="spesialisasi" value="{{$dokter->spesialisasi}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">No. Telp:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="notelp" value="{{$dokter->notelp}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-5">Alamat:</label>
                                        <div class="col-sm-10">
                                            <textarea name="alamat" class="form-control" rows="3">
                                                {{$dokter->alamat}}
                                            </textarea>
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
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@section("extra-script")

<script>
    $(function () {
      $('#table-ruangan').DataTable({});
      $("#jenis_dokter").change(e=>{
        $("#spesialisasi").attr("readonly",$("#jenis_dokter").val()!="spesialis")
      });
    });        
</script>
@endsection