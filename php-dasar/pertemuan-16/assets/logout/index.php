<?php
    // jalankan session
    session_start();
    // hilangkan session
    $_SESSION = [];
    session_unset();
    session_destroy();
    header('Location: ../login');
    exit;
?>