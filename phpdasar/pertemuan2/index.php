<?php

// Pembelajaran hari ini sintaks PHP

/* Cetakan pada PHP

    echo
    print
    var_dump
    print_r
*/

//echo 
    echo "Hello World! ";
    echo 26;
// print
    print "Muhammad Leonza ";
// print_r
    print_r("Teknik Informatika ");
// var_dump (debugging informasi)
    var_dump("Universitas Riau");
?>

<!--Penulisan Sintaks PHP -->
<!-- 1. PHP dalam HTML -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <div>
        <h1>
            Selamat Datang <?php echo "Leonza"; ?>
        </h1>
        <p> <?php echo "2007126282"; ?> </p>
    </div>
</body>
</html>

 <!-- 2. HTML dalam PHP -->
<?php
    echo "<p> Teknik Informatika </p>";
?>

<!-- Variabel PHP -->
<?php 

    $nama = "Muhammad Leonza ";

    echo $nama;

    // operator Aritmatika (+ -  * / % bool)
    $x = 5;
    $y = 8;
    echo $x + $y;

    // operator gabungan 
    $nama_depan = " Muhamamad";
    $nama_belakang = "Leonza ";

    echo $nama_depan . " " . $nama_belakang;

    // Assignment
    // = , +=, -=,*=, /=, %=, .=

    $x = 5;
    $x +=3;
    echo $x;

    $nama = " Muhammad";
    $nama .= " ";
    $nama .= "Leonza";

    echo $nama;

?>

<?php
    //Perbandingan
    // >, <, <= , >= , == , != tidak mengecek tipe data
    var_dump(1 != 6);
?>

<?php
    //Identitas
    // === , !==  mengecek tipe data
    var_dump(1 === "1");
?>

<?php
    //lOGIKA
    // &&, ||
    $x = 8;
    var_dump($x < 6 && $x > 5); //keduanya harus true

    $y = 7;
    var_dump($y > 8 || $y < 10); //salah satu true
?>
