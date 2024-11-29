<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Konfigurasi koneksi database
$host = "localhost";
$user = "root"; // default username MySQL
$password = ""; // default password kosong
$database = "buku_tamu_db"; // nama database yang telah dibuat

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
