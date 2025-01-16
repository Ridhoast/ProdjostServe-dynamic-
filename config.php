<?php
// isi pake server lokal lu
$host = 'localhost';
$user = 'root';
$password = '';
$database = '';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
