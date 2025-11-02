<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM supplier WHERE id='$id'"));

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    mysqli_query($koneksi, "UPDATE supplier SET nama='$nama', telp='$telp', alamat='$alamat' WHERE id='$id'");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Supplier</title>
</head>
<body>
    <h2 align="center">Edit Data Master Supplier</h2>
    <form method="POST" align="center">
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br><br>
        <input type="text" name="telp" value="<?= $data['telp'] ?>" required><br><br>
        <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required><br><br>
        <input type="submit" name="update" value="Update">
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
