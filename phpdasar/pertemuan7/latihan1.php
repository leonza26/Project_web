<?php 
// variabel global dan SupersGlobal 
$x = 10;

function tampilX(){
    global $x;
    echo $x;
}

tampilX();
echo "<br>";

?>

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
    <title>GET</title>
</head>
<body>
    
<h1>Brand Hanphone</h1>

<ul>

    <!-- mengirimkan data melalui request GET yang akan ditangkap oleh variable $_GET -->
    <?php foreach($HP as $smarphone) : ?>
        <li>
            <a href="latihan2.php?merek=<?= $smarphone["Merek"]?>&type=<?= $smarphone["Type"]?>&versi=<?= $smarphone["Versi"]?>&os=<?= $smarphone["Os"]?>&gambar=<?= $smarphone["Gambar"]?>"><?= $smarphone["Merek"] ?> </a>
        </li>
        <?php endforeach; ?>
</ul>

</body>
</html>