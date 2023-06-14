<?php
function koneksi(){
    $koneksi = mysqli_connect("localhost","root","","web_lanjut_rangga");
    return $koneksi;
}


function prodi(){
    $koneksi = koneksi();
    return mysqli_query($koneksi,"SELECT * FROM prodi");
}
