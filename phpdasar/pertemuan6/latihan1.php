<?php
// Mencetak array yang benar dengan pengulangan 
//  bisa pakai for dan foreach 
$umur = [
    [17, 18, 19], 
    [20, 21, 22], 
    [23, 24, 25]];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>

        .alas {
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: salmon;
            margin: 3px;
            line-height: 50px;
            float: left;
            transition: 1s;

        }
        .alas:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear { clear: both;}
    </style>
</head>
<body>


    <!-- mencetak perulangan pada foreach dengan array multidimensi -->
     <?php foreach ($umur as $usia) : ?>
        <?php foreach ($usia as $a) : ?>
        <div class="alas"><?= $a; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
        <?php endforeach; ?>

</body>
</html>