<?php
// Koneksi database
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$id = isset($_POST['id']) ? $_POST['id'] : '';
$tipekontak = isset($_POST['tipekontak']) ? $_POST['tipekontak'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$nowhatsapp = isset($_POST['nowhatsapp']) ? $_POST['nowhatsapp'] : '';
$deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';

// Update data ke database
mysqli_query($koneksi, "UPDATE contact SET tipekontak='$tipekontak', username='$username', nowhatsapp='$nowhatsapp', deskripsi='$deskripsi' WHERE id='$id'");


// Mengalihkan kembali halaman ke index.php
header("location:lihat_anggotact.php");
?>
