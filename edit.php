<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM peminjaman WHERE id = $id");
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tanggal'];
    $nama_siswa = $_POST['nama_siswa'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $keperluan = $_POST['keperluan'];
    $status = $_POST['status'];

    $conn->query("UPDATE peminjaman SET tanggal = '$tanggal', nama_siswa = '$nama_siswa', nama_barang = '$nama_barang', jumlah_barang = $jumlah_barang, keperluan = '$keperluan', status = '$status' WHERE id = $id");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ukk.css">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="edit.php" method="POST">
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>" required><br>

        <label for="nama_siswa">Nama Siswa:</label>
        <input type="text" name="nama_siswa" value="<?= $data['nama_siswa']; ?>" required><br>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?= $data['nama_barang']; ?>" required><br>

        <label for="jumlah_barang">Jumlah Barang:</label>
        <input type="number" name="jumlah_barang" value="<?= $data['jumlah_barang']; ?>" required><br>

        <label for="keperluan">Keperluan:</label>
        <input type="text" name="keperluan" value="<?= $data['keperluan']; ?>"><br>

        <label for="status">Status:</label>
        <input type="text" name="status" value="<?= $data['status']; ?>"><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
