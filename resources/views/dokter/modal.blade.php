<div class="modal fade" id="modalPemeriksaan" role="dialog">
    <div class="modal-dialog modal-ld" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hasil Pemeriksaan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal fromPasien"
                action="{{route("simpanpemeriksaan",["rawat_inap"=>$rawat_inap->id_rawatinap])}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tanggal:</label>
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
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jam:</label>
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

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jenis Pemeriksaan:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="jenis_pemeriksaan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Hasil Pemeriksaan:</label>
                        <div class="col-sm-8">
                            <textarea name="hasil_pemeriksaan" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer row">
                    <button type=submit class="btn bg-green col-2">Simpan</button>
                    <button class="btn bg-red col-2">Batal</button>
                </div>
            </form>
        </div>


    </div>
</div>


<div class="modal fade" id="modalResepobat" role="dialog">
    <div class="modal-dialog modal-ld" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Resep Obat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal fromPasien"
                action="{{route("simpanresepobat",["rawat_inap"=>$rawat_inap->id_rawatinap])}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tanggal:</label>
                        <div class="col-sm-8">
                            <div class="input-group" id="tanggal-obat" data-input-tanggal data-target-input="nearest">
                                <input type="text" class="form-control" value="" name="tgl_order" readonly>
                                <div class="input-group-append" data-target="#tanggal-obat"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jam:</label>
                        <div class="col-sm-8">
                            <div class="input-group" id="jam-obat" data-input-jam data-target-input="nearest">
                                <input type="text" class="form-control" value="" name="order" readonly>
                                <div class="input-group-append" data-target="#jam-obat" data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Nama Obat:</label>
                        <div class="col-sm-8">
                            <select name="id_obat" id="select-obat"></select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tujuan Obat:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tujuan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jumlah Obat:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="jumlah_order">
                        </div>
                    </div>

                </div>
                <div class="modal-footer row">
                    <button class="btn bg-green col-2">Simpan</button>
                    <button class="btn bg-red col-2">Batal</button>
                </div>
            </form>
        </div>

    </div>
</div>


<div class="modal fade" id="modalReturobat" role="dialog">
    <div class="modal-dialog modal-ld" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Retur Obat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal fromPasien" action="" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tanggal:</label>
                        <div class="col-sm-8">
                            <input id="tgl_pengembalian" type="text" class="form-control" value=""
                                name="tanggalsekarang" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jam:</label>
                        <div class="col-sm-8">
                            <input id="jam_pengembalian" type="text" class="form-control" value="" name="jamsekarang"
                                readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Alasan Retur:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="alasan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jumlah Terpakai:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="jumlah_order">
                        </div>
                    </div>

                </div>
                <div class="modal-footer row">
                    <button class="btn bg-green col-2">Simpan</button>
                    <button class="btn bg-red col-2">Batal</button>
                </div>
            </form>
        </div>

    </div>
</div>


<div class="modal fade" id="modalDiagnosa" role="dialog">
    <div class="modal-dialog modal-ld" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Diagnosa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal fromPasien"
                action="{{route("simpandiagnosa",["rawat_inap"=>$rawat_inap->id_rawatinap])}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tanggal:</label>
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
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jam:</label>
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
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tinggi:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tinggi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Berat:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="berat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Suhu Badan:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="suhubadan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Hasil Diagnosa:</label>
                        <div class="col-sm-8">
                            <textarea name="hasil_diagnosa" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer row">
                    <button type=submit class="btn bg-green col-2">Simpan</button>
                    <button class="btn bg-red col-2">Batal</button>
                </div>
            </form>
        </div>

    </div>
</div>


<div class="modal fade" id="modalFasilitas" role="dialog">
    <div class="modal-dialog modal-ld" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Penggunaan Fasilitas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal fromPasien"
                action="{{route("simpanfasilitas",["rawat_inap"=>$rawat_inap->id_rawatinap])}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tanggal:</label>
                        <div class="col-sm-8">
                            <div class="input-group" id="tanggal-pemakaian" data-input-tanggal
                                data-target-input="nearest">
                                <input type="text" class="form-control" value="" name="tgl_pemakaian" readonly>
                                <div class="input-group-append" data-target="#tanggal-pemakaian"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jam:</label>
                        <div class="col-sm-8">
                            <div class="input-group" id="jam-pemakaian" data-input-jam data-target-input="nearest">
                                <input type="text" class="form-control" value="" name="jam_pemakaian" readonly>
                                <div class="input-group-append" data-target="#jam-pemakaian"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Nama Fasilitas:</label>
                        <div class="col-sm-8">
                            <select name="id_fasilitas" id="select-fasilitas"></select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Alasan Pemakaian:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="alasan_pemakaian">
                        </div>
                    </div>

                </div>
                <div class="modal-footer row">
                    <button class="btn bg-green col-2">Simpan</button>
                    <button class="btn bg-red col-2">Batal</button>
                </div>
            </form>
        </div>

    </div>
</div>