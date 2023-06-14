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

<script>
    $("#simpan").click(function () {

if (nilai == "") {
    // console.log("NPM Masih Kosong") 
    $("#tampil_nilai").text("Nilai Masih Kosong")
} else {
    // console.log("NPM Sudah Terisi")
    $("#tampil_nilai").text("Nilai Sudah Terisi")
}

var npm = $("#npm").val()
if (npm == "") {
    $("#tampil_npm").text("Npm Masih Kosong!")
} else {
    $("#tampil_npm").text("Npm Sudah Terisi")
}

var nama_mahasiswa = $("#mahasiswa").val()
if (nama_mahasiswa == "") {
    $("#tampil_nama_mahasiswa").text("Nama Mahasiswa Masih Kosong!")
} else {
    $("#tampil_nama_mahasiswa").text("Nama Mahasiswa Sudah terisi")
}

var prodi = $("#program_studi").val()
if (prodi == "") {
    $("#tampil_program_studi").text("Prodi Belum Dipilih!")
} else {
    $("#tampil_program_studi").text("Prodi Sudah Dipilih")
}

if (npm != "" && nama_mahasiswa != "" && nilai != "" && prodi != "") {
    alert("Data Berhasil Ditambahkan!")
}

document.getElementById("table");

var table = document.getElementById("table");
var row = table.insertRow(-1);
var no = row.insertCell(0);
var npm = row.insertCell(1);
var mahasiswa = row.insertCell(2);
var nilai = row.insertCell(3);
var program_studi = row.insertCell(4);
no.innerHTML = document.getElementById("no").value;
npm.innerHTML = document.getElementById("npm").value;
mahasiswa.innerHTML = document.getElementById("mahasiswa").value;
nilai.innerHTML = document.getElementById("nilai").value;
program_studi.innerHTML = document.getElementById("program_studi").value;

$('input[id="no"]').val("");
$('input[id="npm"]').val("");
$('input[id="npm"]').val("");
$('input[id="mahasiswa"]').val("");
$('input[id="nilai"]').val("");
$('select[id="program_studi"]').val("");

})

</script>

