<?php 
session_start();

// mengembalikan user ke halaman login agar bisa masuk ke halaman index
if(!isset($_SESSION["login"])){
    header('Location: login.php');
    exit;
}

require "functions.php";
 
// membuat konfigurasi pagination 

$jumlah_data_perhalaman = 2;
// fungsi count() agar menghitung jumlah array asossiatif
$jumlah_data = count(query("SELECT * FROM tb_smarphone")); 
// fungsi ceil agar membulatkan nilai ke atas
$jumlahhalaman = ceil($jumlah_data / $jumlah_data_perhalaman);
// memakai ternary operator
$halamanAktif = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
$awaldata = ( $jumlah_data_perhalaman * $halamanAktif) - $jumlah_data_perhalaman;


// menampilakn seluruh data di database setelah di pagination
$rekap = query("SELECT * FROM tb_smarphone LIMIT $awaldata, $jumlah_data_perhalaman");



// Membuat logika pencarian dan menimpa variabel $rekap

if ( isset($_POST["cari"])){
    $rekap = cari($_POST["keyword"]);
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .pagination {
        justify-content: center;
      }
    </style>

</head>
<body>

<h1 class="text-center mt-3">TABEL REKAP PEMESANAN SMARTPHONE</h1>

<div class="container-fluid d-flex justify-content-between align-items-center">
  <a class="btn btn-primary mx-3 mt-2" href="tambah.php" role="button">Tambah data</a>

      <br>

  <form class="d-flex mt-2 mx" role="search" action="" method="POST">
      <input class="form-control me-2" type="search" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off">
      <button class="btn btn-outline-primary" type="submit" name="cari">Search</button>
    </form>
</div>
<a class="btn btn-danger mx-4 mt-3 " href="logout.php" role="button">Logout</a>

<table  class="table table-hover border-3 mx-2 mt-5" >
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Merek</th>
      <th scope="col">Type</th>
      <th scope="col">Versi</th>
      <th scope="col">Os</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>


    </tr>
  </thead>
  <tbody>

  <?php $i = 1 ?>
  <?php foreach($rekap  as $rekapan) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><?= $rekapan["merek"] ?></td>
      <td><?= $rekapan["type"] ?></td>
      <td><?= $rekapan["versi"] ?></td>
      <td><?= $rekapan["os"] ?></td>
      <td>
        <img src="img/<?= $rekapan["gambar"] ?>" alt="infinix" width="100">
    </td>
      <td>
            <a href="ubah.php?id= <?= $rekapan["id"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg></a> |
            <a href="hapus.php?id= <?= $rekapan["id"] ?>" onclick=" return confirm('Apakah Ingin Menghapus Data?');"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg></a>
      </td>
    </tr>
    <?php $i++ ?>
  <?php endforeach; ?>

  </tbody>
</table>

    <!-- pagination -->
    <nav aria-label="...">
      <ul class="pagination">

      <?php if($halamanAktif > 1) : ?>
        <li class="page-item">
          <a class="page-link" href="?page=<?= $halamanAktif - 1; ?>">Previous</a>
        </li> 
        <?php endif; ?>

        <?php for( $i = 1; $i<= $jumlahhalaman; $i++) : ?>
          <?php if($i == $halamanAktif ) : ?>
            <li class="page-item active" aria-current="page">
          <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
        </li>
          <?php else : ?>
        <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
          <?php endif; ?>
        <?php endfor; ?>

        <?php if($halamanAktif < $jumlahhalaman) : ?>
        <li class="page-item">
          <a class="page-link" href="?page=<?= $halamanAktif + 1; ?>">Next</a>
        </li> 
        <?php endif; ?>

      </ul>
    </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>