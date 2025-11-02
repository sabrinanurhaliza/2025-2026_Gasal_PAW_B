<?php
$host = "localhost";
$user = "root";
$pass = "";

// Konek dulu ke MySQL tanpa pilih database
$koneksi = mysqli_connect($host, $user, $pass);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Buat database baru
$sql = "CREATE DATABASE IF NOT EXISTS modul5_data";
if (mysqli_query($koneksi, $sql)) {
    echo "✅ Database 'modul5_data' berhasil dibuat (atau sudah ada).";
} else {
    echo "❌ Gagal membuat database: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
