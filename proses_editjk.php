<?php
// Koneksi database
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$id = isset($_POST['id']) ? $_POST['id'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$hero = isset($_POST['hero']) ? $_POST['hero'] : '';
$paket_joki = isset($_POST['paket_joki']) ? $_POST['paket_joki'] : '';
$metode_pembayaran = isset($_POST['metode_pembayaran']) ? $_POST['metode_pembayaran'] : '';

// Update data ke database
mysqli_query($koneksi, "UPDATE joki_ml SET email='$email', password='$password', login='$login', hero='$hero', paket_joki='$paket_joki', metode_pembayaran='$metode_pembayaran' WHERE id='$id'");


// Mengalihkan kembali halaman ke index.php
header("location:lihat_anggotajk.php");
?>
