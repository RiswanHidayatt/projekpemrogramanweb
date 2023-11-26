<?php
// koneksi database
include 'koneksi.php';

// Menangkap data id yang dikirim dari url
$id = $_GET['id'];


// Menghapus data dari database
mysqli_query($koneksi,"delete from gamepc where id='$id'");

// mengalihkan kembali halaman ke index.php
header("location:lihat_anggotapc.php");

?>