<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    echo "Nama yang Anda masukkan adalah: " . $nama;
} else {
    echo "Data tidak dikirim dengan metode POST";
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel POST</title>
</head>
<body>
    <h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
</body>
</html>