@extends("layouts.no_sidebar")


@section("main_content")
<div class="container-fluid col-5 my-1">
  <section class="content-header">
    <div class="row justify-content-between align-items-center">
      <h1>
        Data Fasilitas
      </h1>
    </div>
  </section>
  {{-- Dari sini --}}
  @if ($errors->any())
  <div class="alert alert-danger">
    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  {{-- Sampe sini buat nampilin error kalo mau di jadiin satu --}}
  <div class="row">
    <div class="col-12">
      <div class="card">
        <form class="form-horizontal" id="form-tambah" action="{{route("fasilitas.store")}}" method="post">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="col-sm-8">ID Fasilitas</label>
                  <div class="col-sm-12">
                    <input type="number" class="form-control" name="id_fasilitas" value="" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-8">Nama Fasilitas:</label>
                  <div class="col-sm-12">
                    {{-- yang di class ini buat biar inputnya ada merah merah --}}
                    <input type="text" class="form-control @error(" nama_fasilitas") is-invalid @enderror"
                      name="nama_fasilitas">
                    {{-- Yang ini buat nampilin pesannya, kalo mau per kolom --}}
                    @error('nama_fasilitas')
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-8">Jenis Fasilitas:</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control  @error(" jenis_fasilitas") is-invalid @enderror"
                      nama_input.nama_validasi name="jenis_fasilitas">
                    @error('jenis_fasilitas')
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-8">Harga Fasilitas:</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control  @error(" harga_fasilitas") is-invalid @enderror"
                      name="harga_fasilitas">
                    @error('harga_fasilitas')
                    <span class="error invalid-feedback">{{$message}}</span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-stretch justify-content-end">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            <a href="{{route("fasilitas.index")}}" class="btn btn-default"><i class="fa fa-power-off"></i>
              Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection