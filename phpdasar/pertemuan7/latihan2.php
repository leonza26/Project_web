<?php 
// jika tidak ada data yang dikirimkan melalui request method get maka akan kembali ke halaman 1
if( !isset($_GET["merek"]) || 
    !isset($_GET["type"]) ||
    !isset($_GET["versi"]) ||
    !isset($_GET["os"])){
    //redirect

    header("Location: latihan1.php");
    exit; 

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
</head>
<style>
    .ukuran {
        width: 100px;
        height: 100px;
    }
</style>
<body>
    
<a href="latihan1.php">&laquo; Back to latihan1</a>

<!-- menangkap data yang dikirimkan oleh method request GET ke variable superglobal $_GET -->

<ul>
    <li><img class="ukuran" src="img/<?= $_GET["gambar"] ?>" alt="infinix"></li>
    <li><?= $_GET["merek"] ?></li>
    <li><?= $_GET["type"] ?></li>
    <li><?= $_GET["versi"] ?></li>
    <li><?= $_GET["os"] ?></li>
</ul>


</body>
</html>