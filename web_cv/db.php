<?php
$host = 'localhost';  // Alamat server database
$user = 'root';       // Username default phpMyAdmin
$password = '';       // Password default (kosong di XAMPP)
$dbname = 'catalog';  // Nama database yang Anda buat

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>
