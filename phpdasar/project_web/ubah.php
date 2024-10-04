<?php

session_start();

// mengembalikan user ke halaman login agar bisa masuk ke halaman ubah data
if(!isset($_SESSION["login"])){
    header('Location: login.php');
    exit;
}

require "functions.php";

$id = $_GET["id"];

$smartphone = query("SELECT * FROM tb_smarphone WHERE id = $id")[0];


// membuat logika agar setelah submit data diubah
if( isset($_POST["submit"])){
  
  // menegecek apakah data berhasil di ubah ke database
   if ( ubah($_POST) > 0 ) {
      echo "
        <script>
          alert('Data Berhasil Diubah!');
          document.location.href = 'index.php';

        </script>
      ";
   } else {
      echo "
      <script>
          alert('Data gagal diubah!');
          document.location.href = 'index.php';

        </script>
        ";
    }

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    

<h1 class="mb-5 mt-3 text-center">Ubah Data Penjualan</h1>

<form class="container mt-3" action="" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $smartphone["id"]; ?>">
  <input type="hidden" name="gambarLama" value="<?= $smartphone["gambar"]; ?>">
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Merek</label>
      <input type="text" id="disabledTextInput" name="merek" class="form-control" required
      value="<?= $smartphone["merek"]?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Type</label>
      <input type="text" id="disabledTextInput" name="type" class="form-control" required
      value="<?= $smartphone["type"]?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Versi</label>
      <input type="text" id="disabledTextInput" name="versi" class="form-control" required
      value="<?= $smartphone["versi"]?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Os</label>
      <input type="text" id="disabledTextInput" name="os" class="form-control" required
      value="<?= $smartphone["os"]?>">
    </div>
    <div class="mb-3">
      <label for="formImage" class="form-label">Gambar :</label>
      <img src="img/<?= $smartphone["gambar"]; ?>" alt="gambar">
      <input class="form-control" type="file" name="gambar" id="formImage" required>
    </div>
    <div class="mt-3">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>