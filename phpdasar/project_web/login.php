<?php 
sleep(1);
session_start();

require 'functions.php';


// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])){
  $id = $_COOKIE["id"];
  $key = $_COOKIE["key"];

  // ambil cookie berdasarkan username
  $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username 
  if ( $key === hash('sha256', $row["username"])){
    $_SESSION["login"] = true;
  }


}

// mengembalikan user ke halaman index jika ingin masuk halaman login
if(isset($_SESSION["login"])){
    header('Location: index.php');
    exit;
}





// cek apakah data berhasil masuk setelah login di tekan
if ( isset($_POST["login"])){

    // mengambil inputan form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE 
    username = '$username'");

    // cek username 
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);

        if( password_verify($password, $row["password"]) ){

            // membuat session agar login dulu baru bisa masuk ke halaman lainnya dan hanya satu sesi
            $_SESSION["login"] = true;

            // membuat cookie agar kita saat close chrome kita masih bisa login ke server kita

            if (isset($_POST["remember"])){
              // membuat cookie menggunakan funtions setcookie dan menggunakan id dan username agar tidak bisa dibaca oleh user yang lain untuk melakukan login
              // setcookie(namacookie, nilai,waktu cookie);
              setcookie('id', $row['id'], time() +60);
              setcookie('key', hash('sha256', $row["username"]));

            }


            header("Location: index.php");
            exit;
        }
    }

    $error = true;


}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<div class="card container mt-5 border border-primary" style="width: 40rem;">
  <div class="card-body">
  <h2 class="card-title text-center mb-3">Login</h2>

  <?php if(isset($error)) : ?>
    <p style="color: red; font-style: italic">username atau password salah!</p>
    <?php endif; ?>

  <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">Username</label>
    <input type="text" class="form-control border border-primary" id="exampleInputUsername" name="username" placeholder="assep" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword" class="form-label">Password</label>
    <input type="password" class="form-control border border-primary" id="exampleInputPassword" name="password" placeholder="**********" require>
  </div>
  <div class="">
    <label class="form-label">Belum Punya Akun? <a href="registrasi.php">Register Sekarang</a> </label>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me </label>
  </div>

  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>

  </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>