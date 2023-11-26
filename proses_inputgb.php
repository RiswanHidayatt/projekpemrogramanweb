<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi

// Mengambil nilai dari formulir
// Menangkap data yang dikirim dari form dan membersihkannya
$user_idgame = isset($_POST['user_idgame']) ? mysqli_real_escape_string($koneksi, $_POST['user_idgame']) : '';
$user_servergame = isset($_POST['user_servergame']) ? mysqli_real_escape_string($koneksi, $_POST['user_servergame']) : '';
$nominal_pembelian = isset($_POST['nominal_pembelian']) ? mysqli_real_escape_string($koneksi, $_POST['nominal_pembelian']) : '';
$jumlah_pembelian = isset($_POST['jumlah_pembelian']) ? mysqli_real_escape_string($koneksi, $_POST['jumlah_pembelian']) : '';
$Metode_pembayaran = isset($_POST['Metode_pembayaran']) ? mysqli_real_escape_string($koneksi, $_POST['Metode_pembayaran']) : '';

// Update data ke database
$query = mysqli_query($koneksi, "INSERT INTO gamemobile (user_idgame, user_servergame, nominal_pembelian, jumlah_pembelian, Metode_pembayaran)
        VALUES ('$user_idgame', '$user_servergame', '$nominal_pembelian', '$jumlah_pembelian', '$Metode_pembayaran')");


if ($query) {
    // Jika berhasil memasukkan data, arahkan ke halaman lihat_anggota
    header("location: lihat_anggotagb.php");
} else {
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
}
?>
