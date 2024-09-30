<?php
// Mencetak array yang benar dengan pengulangan 
//  bisa pakai for dan foreach 
$umur = [17, 18, 19, 20, 21, 22, 23];
$nama = ["neymar", "ronaldo" , "messi"];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: salmon;
            margin: 3px;
            line-height: 50px;
            float: left;

        }

        .alas {
            width: 100px;
            height: 50px;
            text-align: center;
            background-color: salmon;
            margin: 3px;
            line-height: 50px;
            float: left;

        }
        .clear { clear: both;}
    </style>
</head>
<body>
    <!-- mencetak array pada perulangan for -->
    <?php for($i = 0; $i < count($umur); $i++) : ?>
    <div class="kotak"><?= $umur[$i];  ?></div>
    <?php endfor; ?>

    <div class="clear"></div>
    <!-- mencetak perulangan pada foreach -->
     <?php foreach ($nama as $name) : ?>
        <div class="alas"><?= $name; ?></div>
        <?php endforeach; ?>
</body>
</html>