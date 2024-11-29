<?php
$host = "localhost";
$user = "root";
$password = ""; // Kosongkan jika tidak ada password MySQL
$database = "buku_tamu_db";

$conn = mysqli_connect($host, $user, $password, $database);

if ($conn) {
    echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal: " . mysqli_connect_error();
}
?>
