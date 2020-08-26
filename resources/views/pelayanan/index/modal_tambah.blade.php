<div class="modal fade" id="modalTambah" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Data Pasien</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal" id="form-tambah" action="{{route("simpanpelayanan")}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-default">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Tgl Masuk</label>
                                                <div>
                                                    <input id="tanggal-display" type="text" class="form-control"
                                                        value="" disabled>
                                                    <input type="hidden" name="tanggal" id="tanggal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">No.Rawat Inap</label>
                                                <div>
                                                    <input type="text" class="form-control" name="no_ri" value=""
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    Identitas Pasien
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">No.Identitas<sup
                                                class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="no_identitas"
                                                id="no_identitas">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Nama Pasien<sup
                                                class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nama_pasien" id="nama_pasien">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Tempat Lahir<sup
                                                class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tempat_lahir"
                                                id="tempat_lahir">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Tanggal Lahir:</label>
                                        <div class="input-group date col-6" id="tgl-lahir-datepicker"
                                            data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                data-target="#tgl-lahir-datepicker" id="text-tgl-lahir" readonly
                                                name="tgl_lahir" />
                                            <div class="input-group-append" data-target="#tgl-lahir-datepicker"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Umur:</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <input type="text" disabled class="form-control" id="text_umur">
                                                <span class="input-group-append">
                                                    <div class="input-group-text">Tahun</div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Jenis Kelamin<sup
                                                class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                            <div class="radio">
                                                <label class="col-sm-5">
                                                    <input type="radio" name="jenis_kelamin" value="Laki-laki"
                                                        id="jeniskelamin_L">
                                                    Laki - Laki
                                                </label>
                                                <label class="col-sm-5">
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan"
                                                        id="jeniskelamin_P">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Agama:</label>
                                        <div class="col-sm-8">
                                            <select name="agama" class="form-control">
                                                <option selected="true" disabled></option>
                                                <option value="islam">Islam</option>
                                                <option value="krisen">Kristen Protestan</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                                <option value="konghucu">Kong Hu Cu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Status Perkawinan:</label>
                                        <div class="col-sm-8">
                                            <select name="status_perkawinan" class="form-control">
                                                <option selected="true" disabled></option>
                                                <option value="belummenikah">Belum Menikah</option>
                                                <option value="menikah">Menikah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Gol Darah:</label>
                                        <div class="col-sm-8">
                                            <select name="gol_darah" class="form-control">
                                                <option selected="true" disabled></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Pendidikan:</label>
                                        <div class="col-sm-8">
                                            <select name="pendidikan" class="form-control">
                                                <option selected="true" disabled></option>
                                                <option value="tdktamatsd">Tidak Tamat SD</option>
                                                <option value="sd">SD</option>
                                                <option value="smp">SMP</option>
                                                <option value="sma">SMA</option>
                                                <option value="s1">S1</option>
                                                <option value="s2">S2</option>
                                                <option value="s3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Pekerjaan:</label>
                                        <div class="col-sm-8">
                                            <select name="pekerjaan" class="form-control">
                                                <option selected="tidaktahu" disabled></option>
                                                <option value="tidakbekerja">Tidak Bekerja</option>
                                                <option value="pns">PNS</option>
                                                <option value="karyawanswasta">Karyawan Swasta</option>
                                                <option value="pensiunan">Pensiunan</option>
                                                <option value="tni">TNI</option>
                                                <option value="pedagang">Pedagang</option>
                                                <option value="nelayan">Nelayan</option>
                                                <option value="petani">Petani</option>
                                                <option value="buruh">Buruh</option>
                                                <option value="iburumahtangga">Ibu Rumah Tangga</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Alergi:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="alergi" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Provinsi:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="select_prov" name="prov"
                                                style="width:100%">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Kabupaten:</label>
                                        <div class="col-sm-8">
                                            <div id="kabupaten">
                                                <select class="form-control" id="select_kab" name="kab"
                                                    style="width:100%">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Kecamatan:</label>
                                        <div class="col-sm-8">
                                            <div id="kecamatan">
                                                <select class="form-control" id="select_kec" name="kec"
                                                    style="width:100%">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Desa:</label>
                                        <div class="col-sm-8">
                                            <div id="kampung">
                                                <select class="form-control" id="select_desa" name="id_desa"
                                                    style="width:100%">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Alamat:</label>
                                        <div class="col-sm-8">
                                            <textarea name="alamat" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">No.HP:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="no_hp">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card card-default">
                                <div class="card-header">
                                    Keluarga Pasien
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">No. KK:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="no_kk">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Nama Keluarga:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama_keluarga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Hubungan:</label>
                                        <div class="col-sm-9">
                                            <select name="hubungan" class="form-control">
                                                <option selected="true" disabled></option>
                                                <option value="ayah">Ayah</option>
                                                <option value="ibu">Ibu</option>
                                                <option value="suami">Suami</option>
                                                <option value="istri">Istri</option>
                                                <option value="anak">Anak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="card card-default">
                                <div class="card-header">
                                    Rawat Inap
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Gedung<sup
                                                class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                            <select name="gedung" id="select_gedung" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Ruang<sup
                                                class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                            <select name="ruangan" id="select_ruang" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">kamar<sup
                                                class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                            <select name="kamar" id="select_kamar" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">No. Tempat Tidur<sup
                                                class="bintang">*</sup>:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="no_tempattidur">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Dokter PJ:</label>
                                        <div class="col-sm-8">
                                            <select name=dokter_pj class="form-control" id="select_dokter">
                                                <option value=""></option>
                                                <option value="adel">Adel</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-default">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Jenis Pasien:</label>
                                        <div class="col-sm-8">
                                            <select name="jenis_pasien" class="form-control">
                                                <option value=""></option>
                                                <option value="bpjs">BPJS</option>
                                                <option value="nonbpjs">Non BPJS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">No BPJS:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="no_bpjs">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Nama Peserta BPJS:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nama_pesertabpjs">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    Kedatangan
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Prosedur Masuk:</label>
                                        <div class="col-sm-8">
                                            <select name="prosedur_masuk" class="form-control">
                                                <option value=""></option>
                                                <option value="langsung">Langsung</option>
                                                <option value="rujukanIGD">Rujukan IGD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Cara Masuk:</label>
                                        <div class="col-sm-8">
                                            <select name="cara_masuk" class="form-control">
                                                <option value=""></option>
                                                <option value="datangsendiri">Datang Sendiri</option>
                                                <option value="kontrol">Kontrol</option>
                                                <option value="dokterrs">Dokter RS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Perujuk:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="perujuk">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Dokter RS:</label>
                                        <div class="col-sm-8">
                                            <select name="nama_dokter" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Asal Rujukan:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="asal_rujukan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Alasan Dirujuk:</label>
                                        <div class="col-sm-8">
                                            <select name="alasan_dirujuk" class="form-control">
                                                <option value=""></option>
                                                <option value="kepentinganmedis">Kepentingan Medis</option>
                                                <option value="fasilitaskurang">Fasilitas Kurang</option>
                                                <option value="permintaansendiri">Permintaan Sendiri</option>
                                                <option value="tempattidurpenuh">Tempat Tidur Penuh</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    Catatan Fisik
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Tinggi:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="tinggi" placeholder="cm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Berat:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="berat" placeholder="kg">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Suhu Badan:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="suhubadan" placeholder="C">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Diagnosa:</label>
                                        <div class="col-sm-8">
                                            <textarea name="hasil_diagnosa" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-power-off"></i>
                        Batal</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->