<?php
    session_start();
    $_SESSION = [];
    session_unset();
    // untuk mengakhiri session
    session_destroy();

    header('Location: login.php')

?>