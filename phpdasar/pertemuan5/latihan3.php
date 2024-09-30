<?php 

$mahasiswa = [["Muhammad Leonza", "2007126282", "Teknik Informatika", "muhammadleonza@unri.ac.id"], 
["Muhammad Rahim", "2007126282", "Teknik Industri", "muhammadrahim@unri.ac.id"] , ["Muhammad Akbar", "2007126282", "Teknik mesin", "muhammadakbar@unri.ac.id"]
];

$no_hp = [
    [4, 5, 6], 
    [1, 2, 3], 
    [7, 8, 9]];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>


<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0] ?></li>
        <li>Nim : <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>Email : <?= $mhs[3] ?></li>
    </ul>
<?php endforeach; ?>



    <li>No : <?= $no_hp[0][1] ?></li>


</body>
</html>