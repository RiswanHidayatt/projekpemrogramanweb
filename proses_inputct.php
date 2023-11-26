<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi

// Mengambil nilai dari formulir
$tipekontak = isset($_POST['tipekontak']) ? $_POST['tipekontak'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$nowhatsapp = isset($_POST['nowhatsapp']) ? $_POST['nowhatsapp'] : '';
$deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';

// Memasukkan data ke dalam tabel 'Pembelian' 
$query = mysqli_query($koneksi, "INSERT INTO contact (tipekontak, username, nowhatsapp, deskripsi)
        VALUES ('$tipekontak', '$username', '$nowhatsapp', '$deskripsi')");

if ($query) {
    // Jika berhasil memasukkan data, arahkan ke halaman lihat_anggota
    header("location: lihat_anggotact.php");
} else {
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
}
?>
