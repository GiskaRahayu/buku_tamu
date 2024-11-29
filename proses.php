<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php'; // Menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['isi']; // 'isi' berasal dari form

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$komentar')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<h1>Data berhasil disimpan!</h1>";
        echo "<p><a href='index.php'>Kembali ke Form</a> atau <a href='tampil.php'>Lihat Data</a></p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn); // Menutup koneksi
}
?>
