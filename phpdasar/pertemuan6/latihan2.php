<?php
// array asosiative yaitu araay yang ada key dan value tidak lagi index
$HP = [
    ["Merek" => "Infinix", 
    "Type" => "Hot 11s NFC", 
    "Versi" => "Android 12",
    "Os" => "Android",
    "Gambar" => "infinix.jpg"],

    ["Merek" => "Apple", 
    "Type" => "Iphone 15", 
    "Versi" => "Os 5",
    "Os" => "ios 14", 
    "Gambar" => "Apple.jpg"],

    ["Merek" => "Samsung", 
    "Type" => "Galaxy S24", 
    "Versi" => "Android 13",
    "Os" => "Android", 
    "Gambar" => "samsung.jpg"]

];


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<style>
    .ukuran {
        width: 100x;
        height: 100px;
    }
</style>
<body>

<h1>Brand Hanphone</h1>


<?php foreach ($HP as $smartphone) : ?>
    <ul>
        <li> <img class="ukuran" src="img/<?= $smartphone["Gambar"]; ?>">
        </li>
        <li>Brand : <?= $smartphone["Merek"] ?></li>
        <li>Type : <?= $smartphone["Type"] ?></li>
        <li>Versi : <?= $smartphone["Versi"] ?></li>
        <li>Os : <?= $smartphone["Os"] ?></li>

    </ul>
<?php endforeach; ?>


</body>
</html>