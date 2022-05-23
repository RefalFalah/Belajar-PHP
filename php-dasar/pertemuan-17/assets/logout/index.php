<?php
    // jalankan session
    session_start();
    // hilangkan session
    $_SESSION = [];
    session_unset();
    session_destroy();
    // hilangkan cookie
    setcookie("id", "", time() - 3600, "/", "localhost", 1);
    setcookie("key", "", time() - 3600, "/", "localhost", 1);
    header('Location: ../login');
    exit;
?>