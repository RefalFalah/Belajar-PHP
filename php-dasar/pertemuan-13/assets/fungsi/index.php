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
        // upload poto
        $poto = upload();
        if (!$poto) {
            return false;
        }
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
    
    // function upload
    function upload () {
        // ambil data dari $_FILES
        $namaFile = $_FILES["poto"]["name"];
        $ukuranFile = $_FILES["poto"]["size"];
        $error = $_FILES["poto"]["error"];
        $tmpName = $_FILES["poto"]["tmp_name"];
        // cek apakah ada poto yang diupload apa tidak
        if ($error === 4) {
            echo("<script>
                    alert('Upload poto terlebih dahulu!');
                </script>");
            return false;
        }
        // cek apakah yang diupload poto apa bukan
        $ektensiPotoValid = ["jpg","jpeg","png"];
        $ektensiPoto = strtolower(pathinfo($namaFile,PATHINFO_EXTENSION));
        if (!in_array($ektensiPoto, $ektensiPotoValid)) {
            echo("<script>
                    alert('Yang anda upload bukan poto!');
                </script>");
            return false;
        }
        // cek ukuran poto terlalu besar apa tidak
        if ($ukuranFile > 1500000) {
            echo("<script>
                    alert('Ukuran poto terlalu besar!');
                </script>");
            return false;
        }
        // lolos pengecekan gambar siap upload
        // generat nama poto baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= ".";
        $namaFileBaru .= $ektensiPoto;
        move_uploaded_file($tmpName, "../img/".$namaFileBaru);
        
        return $namaFileBaru;
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
        $potoLama = htmlspecialchars($data["potoLama"]);
        // cek apakah user pilih gambar apa tidak
        if ($_FILES["poto"]["error"] === 4) {
            $poto = $potoLama;
        }else {
            $poto = upload();
        }
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