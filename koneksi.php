<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_kelompok10");

    //cek koneksi
    if (mysqli_connect_errno()){
        echo "Koneksi database mysqli gagal!!! : ". mysqli_connect_error();
    }