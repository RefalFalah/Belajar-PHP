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
    
    // function tambah
    function tambah ($data) {
        global $conn;
        // ambil seluruh data
        $poto = htmlspecialchars($data["poto"]);
        $nis = htmlspecialchars($data["nis"]);
        $nama = htmlspecialchars($data["nama"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        // query
        $query = "INSERT INTO students VALUES
                  ('', '$poto', '$nis', '$nama', '$kelas', '$jurusan')";
        // insert data ketabel students
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
    
    // function hapus
    function hapus ($id) {
        global $conn;
        // query
        $query = "DELETE FROM students WHERE id = $id";
        // hapus data dari tabel students
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
    
    // function edit
    function edit ($data, $id) {
        global $conn;
        // ambil seluruh data
        $poto = htmlspecialchars($data["poto"]);
        $nis = htmlspecialchars($data["nis"]);
        $nama = htmlspecialchars($data["nama"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        // query
        $query = "UPDATE students SET
                    poto = '$poto',
                    nis = '$nis',
                    nama = '$nama',
                    kelas = '$kelas',
                    jurusan = '$jurusan'
                  WHERE id = $id";
        // insert data ketabel students
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }
    
    // function cari
    function cari ($keyword) {
        // query
        $query = "SELECT * FROM students WHERE
                    nis LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    kelas LIKE '%$keyword%' OR
                    jurusan LIKE '%jurusan%'";
        return query($query);
    }
?>