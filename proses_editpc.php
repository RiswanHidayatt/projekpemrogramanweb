<?php
// Koneksi database
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$id = isset($_POST['id']) ? $_POST['id'] : '';
$user_idgame = isset($_POST['user_idgame']) ? $_POST['user_idgame'] : '';
$user_servergame = isset($_POST['user_servergame']) ? $_POST['user_servergame'] : '';
$nominal_pembelian = isset($_POST['nominal_pembelian']) ? $_POST['nominal_pembelian'] : '';
$jumlah_pembelian = isset($_POST['jumlah_pembelian']) ? $_POST['jumlah_pembelian'] : '';
$Metode_pembayaran = isset($_POST['Metode_pembayaran']) ? $_POST['Metode_pembayaran'] : '';

// Update data ke database
mysqli_query($koneksi, "UPDATE gamemobile SET user_idgame='$user_idgame', user_servergame='$user_servergame', nominal_pembelian='$nominal_pembelian', jumlah_pembelian='$jumlah_pembelian', Metode_pembayaran='$Metode_pembayaran' WHERE id='$id'");


// Mengalihkan kembali halaman ke index.php
header("location:lihat_anggotapc.php");
?>
