<?php
    session_start();
    $_SESSION = [];
    session_unset();
    // untuk mengakhiri session
    session_destroy();

    // mengakhiri cookie
    // nama cookie, nilai kosong, waktu - 3600
    setcookie('id', '', time() - 3600);
    setcookie('key', '', time() - 3600);

    header('Location: login.php');
    exit;

?>