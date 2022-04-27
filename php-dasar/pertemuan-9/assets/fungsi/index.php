<?php
    // koneksi ke database
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $db = "phpdasar";
    $conn = mysqli_connect($serverName, $userName, $password, $db);
    
    // function query
    function query ($query) {
        global $conn;
        // ambil data dari tabel students
        $result = mysqli_query($conn, $query);
        // cek error
        if (!$result) {
            echo(mysqli_error($conn));
        }
        // array kosong untuk menampung data
        $students = [];
        // ambil seluruh data
        while ($student = mysqli_fetch_assoc($result)) {
            $students [] = $student;
        }
        return $students;
    }
?>