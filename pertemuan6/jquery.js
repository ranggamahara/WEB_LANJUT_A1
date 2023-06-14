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

// function navbar
// $(".halaman").click(function () {
//     var id_halaman = $(this).attr("id")
//     if (id_halaman == "halaman_mahasiswa") {
//         $("#halaman_body").load("halaman_mahasiswa.php")
//     } else if (id_halaman == "halaman_beranda") {
//         $("#halaman_body").load("halaman_beranda.php")
//     }
// })

// $("#halaman_body").load("halaman_beranda.php")

$(".halaman").click(function () {
    var id_halaman = $(this).attr("id");
    if (id_halaman == "halaman_mahasiswa") {
        $("#body").load('halaman_mahasiswa.php');
    } else if (id_halaman == "halaman_beranda") {
        $('#body').load('halaman_beranda.php')
    } else if (id_halaman == "halaman_prodi") {
        $('#body').load('halaman_prodi.php')
    }
})
$('#body').load("halaman_beranda.php")
