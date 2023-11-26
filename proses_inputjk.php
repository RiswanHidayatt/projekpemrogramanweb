<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi

// Mengambil nilai dari formulir
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$hero = isset($_POST['hero']) ? $_POST['hero'] : '';
$paket_joki = isset($_POST['paket_joki']) ? $_POST['paket_joki'] : '';
$metode_pembayaran = isset($_POST['metode_pembayaran']) ? $_POST['metode_pembayaran'] : '';

// Memasukkan data ke dalam tabel 'Pembelian' 
$query = mysqli_query($koneksi, "INSERT INTO joki_ml (email, password, login, hero, paket_joki, metode_pembayaran)
        VALUES ('$email', '$password', '$login', '$hero', '$paket_joki', '$metode_pembayaran')");

if ($query) {
    // Jika berhasil memasukkan data, arahkan ke halaman lihat_anggota
    header("location: lihat_anggotajk.php");
} else {
    // Jika terjadi kesalahan, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
}
?>
