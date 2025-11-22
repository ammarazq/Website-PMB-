<?php
$host = "localhost";
$user = "root";       // ganti jika ada user lain
$pass = "";           // isi password MySQL kamu
$db   = "universitas_terbuka"; // nama database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
