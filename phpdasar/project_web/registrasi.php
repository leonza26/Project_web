<?php 

require "functions.php";

// cek apakah data berhasil masuk setelah register di tekan
if ( isset($_POST["register"])){

    // menegecek apakah data berhasil di tambahkan ke database
   if ( registrasi($_POST) > 0 ) {
    echo "
      <script>
        alert('User Baru Berhasil Ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
 } else {
    echo mysqli_error($conn);
  }

}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<div class="card container mt-5 border border-primary" style="width: 40rem;">
  <div class="card-body">
  <h2 class="card-title text-center mb-3">Registrasi</h2>
  <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">Username</label>
    <input type="text" class="form-control border border-primary" id="exampleInputUsername" name="username" placeholder="example@gmail.com" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="akunku123" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control border border-primary" id="exampleInputPassword1" name="password1" placeholder="**********" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control border border-primary" id="exampleInputPassword2" name="password2" placeholder="**********" require>
  </div>
  <div class="">
    <label class="form-label">Sudah Punya Akun? <a href="Login.php">Login</a> </label>
  </div>
  <button type="submit" name="register" class="btn btn-primary">Register</button>
</form>

  </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>