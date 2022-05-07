<?php
    // jalankan session
    session_start();
    
    // cek ada session nya tidak
    if (!isset($_SESSION["login"])) {
        header("Location : ../login/index.php");
    }
    
    // menghubungkan ke file fungsi
    require("../fungsi/index.php");
    
    // cek apakah data berhasil ditambah atau tidak
    if (isset($_POST["kirim"])) {
        if (tambah($_POST) > 0) {
            echo("<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href='../../index.php';
                </script>");
        }else {
            echo("<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href='../../index.php';
                </script>");
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Tambah Data Siswa</title>
    </head>
    <body>
        <h1>Tambah Siswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="poto">Poto</label></td>
                    <td> : </td>
                    <td><input type="file" name="poto" id="poto"></td>
                </tr>
                <tr>
                    <td><label for="nis">NIS</label></td>
                    <td> : </td>
                    <td><input type="number" name="nis" id="nis"></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td> : </td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="kelas">Kelas</label></td>
                    <td> : </td>
                    <td><input type="text" name="kelas" id="kelas"></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td> : </td>
                    <td><input type="text" name="jurusan" id="jurusan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="kirim">Kirim</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>