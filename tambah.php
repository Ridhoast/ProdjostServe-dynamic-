<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tanggal'];
    $nama_siswa = $_POST['nama_siswa'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $keperluan = $_POST['keperluan'];
    $status = $_POST['status'];

    $conn->query("INSERT INTO peminjaman (tanggal, nama_siswa, nama_barang, jumlah_barang, keperluan, status) VALUES ('$tanggal', '$nama_siswa', '$nama_barang', $jumlah_barang, '$keperluan', '$status')");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ukk.css">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="tambah.php" method="POST">
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" required><br>

        <label for="nama_siswa">Nama Siswa:</label>
        <input type="text" name="nama_siswa" required><br>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required><br>

        <label for="jumlah_barang">Jumlah Barang:</label>
        <input type="number" name="jumlah_barang" required><br>

        <label for="keperluan">Keperluan:</label>
        <input type="text" name="keperluan"><br>

        <label for="status">Status:</label>
        <input type="text" name="status"><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
