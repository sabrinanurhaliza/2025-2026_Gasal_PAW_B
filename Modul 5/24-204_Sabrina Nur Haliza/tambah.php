<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama', '$telp', '$alamat')";
    mysqli_query($koneksi, $sql);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Supplier</title>
</head>
<body>
    <h2 align="center">Tambah Data Master Supplier Baru</h2>
    <form method="POST" align="center">
        <input type="text" name="nama" placeholder="Nama" required><br><br>
        <input type="text" name="telp" placeholder="Telp" required><br><br>
        <input type="text" name="alamat" placeholder="Alamat" required><br><br>
        <input type="submit" name="simpan" value="Simpan">
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
