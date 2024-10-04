<?php

session_start();

// mengembalikan user ke halaman login agar bisa masuk ke halaman tambah data
if(!isset($_SESSION["login"])){
    header('Location: login.php');
    exit;
}

require "functions.php";


// membuat logika agar setelah submit data masuk
if( isset($_POST["submit"])){
  
  // menegecek apakah data berhasil di tambahkan ke database
   if ( tambah($_POST) > 0 ) {
      echo "
        <script>
          alert('Data Berhasil Ditambahkan!');
          document.location.href = 'index.php';

        </script>
      ";
   } else {
      echo "
      <script>
          alert('Data gagal!');
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
    <title>Tambah Data Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    

<h1 class="mb-5 mt-3 text-center">Tambah Data Penjualan</h1>

<!-- Enctype dipakai untuk membuat form bisa membaca $_POST dan $_FILES -->
<form class="container mt-3" action="" method="POST" enctype="multipart/form-data">
  
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Merek</label>
      <input type="text" id="disabledTextInput" name="merek" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Type</label>
      <input type="text" id="disabledTextInput" name="type" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Versi</label>
      <input type="text" id="disabledTextInput" name="versi" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Os</label>
      <input type="text" id="disabledTextInput" name="os" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="formImage" class="form-label">Gambar</label>
      <input class="form-control" type="file" name="gambar" id="formImage">
    </div>
    <div class="mt-3">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>