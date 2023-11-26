<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi

// Mengambil nilai dari formulir
$user_idgame = isset($_POST['user_idgame']) ? $_POST['user_idgame'] : '';
$user_servergame = isset($_POST['user_servergame']) ? $_POST['user_servergame'] : '';
$nominal_pembelian = isset($_POST['nominal_pembelian']) ? $_POST['nominal_pembelian'] : '';
$jumlah_pembelian = isset($_POST['jumlah_pembelian']) ? $_POST['jumlah_pembelian'] : '';
$Metode_pembayaran = isset($_POST['Metode_pembayaran']) ? $_POST['Metode_pembayaran'] : '';

// Memasukkan data ke dalam tabel 'Pembelian' 
$query = mysqli_query($koneksi, "INSERT INTO gamepc (user_idgame, user_servergame, nominal_pembelian, jumlah_pembelian, Metode_pembayaran)
        VALUES ('$user_idgame', '$user_servergame', '$nominal_pembelian', '$jumlah_pembelian', '$Metode_pembayaran')");

if ($query) {
    // Jika berhasil memasukkan data, arahkan ke halaman lihat_anggota
    header("location: lihat_anggotapc.php");
} else {
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
}
?>
