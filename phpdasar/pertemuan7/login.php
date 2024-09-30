<?php
// jika tombol submit sudah ditekan
if( isset($_POST["submit"])){
// periksa username dan password
    if( $_POST["nama"] == "Leonza" && $_POST["password"] == "1234"){
        header("Location: admin.php");
        exit;

} else {
// jika salah tampilkan pesan error
    $error = true;
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>



<div class="card container mt-3">
    <form class="container" action="" method="post">
        <h1 class="text-center">Login</h1>

        <?php if(isset($error)) : ?>
            <p style="color: red;">Username atau Password salah!</p>
        <?php endif; ?>

    <div class="mb-3">
        <label for="exampleInputUsername" class="form-label">Masukkan Username</label>
        <input type="text" name="nama" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>