<?php
$host = 'localhost';
$user = 'root';
$password = '@Adtraarr404';
$database = 'sistem_peminjaman';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
