<div class="row">
    <div class="col-sm-8">
        <p id="alert_berhasil"></p>
        <h4>Daftar Mahasiswa</h4>
        <table class="table" id="table">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>NAMA MAHASISWA</th>
                <th>NILAI</th>
                <th>Program Studi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2009010007</td>
                <td>Rangga Mahara</td>
                <td>99</td>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2009010018</td>
                <td>King Ahmad Salahudin IX</td>
                <td>999</td>
                <td>Sains Data</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2009010008</td>
                <td>Jailani Iskandar</td>
                <td>1</td>
                <td>Sains Data</td>
            </tr>
        </table>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label>Npm</label>
            <input class="form-control" id="npm">
            <p id="tampil_npm" class="peringatan"></p>

            <label>Nama Mahasiswa</label>
            <input class="form-control" id="mahasiswa">
            <p id="tampil_nama_mahasiswa" class="peringatan"></p>

            <label>Nilai</label>
            <input class="form-control" id="nilai">
            <p id="tampil_nilai" class="peringatan"></p>
        </div>
        <div class="from-group">
            <label>Program Studi</label>
            <select class="form-control" id="program_studi">
                <option value="" selected>Pilih Program Studi
                </option>
                <option>Sistem Informasi</option>
                <option>Teknik Informasi</option>
                <option>Sains Data</option>
            </select>
            <p id="tampil_program_studi" class="peringatan"></p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-success" id="simpan">Simpan</button>
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <button class="btn btn-danger">Batal</button>
            </div>
        </div>
    </div>
</div>
