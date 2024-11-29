<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php'; // Menghubungkan ke database

$query = "SELECT * FROM buku_tamu";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku Tamu</title>
</head>
<body>
    <h1>Daftar Buku Tamu</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Komentar</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row['ID_BT']; ?></td>
                <td><?= $row['NAMA']; ?></td>
                <td><?= $row['EMAIL']; ?></td>
                <td><?= $row['ISI']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php
mysqli_close($conn); // Menutup koneksi
?>
