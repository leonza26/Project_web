<?php 

function salam($salam = "datang", $nama = "admin"){
    return "Selamat $salam, $nama!";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1><?= salam("Pagi", "zahara"); ?></h1>
</body>
</html> 