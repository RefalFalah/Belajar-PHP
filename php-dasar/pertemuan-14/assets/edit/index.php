<?php
    // menghubungkan ke file fungsi
    require("../fungsi/index.php");
    
    // ambil data dari url
    $id = $_GET["id"];
    
    // tampilkan data yang ingin di edit sesuai id 
    $student = query("SELECT * FROM students WHERE id = $id")[0];
    
    // cek apakah data berhasil diedit atau tidak
    if (isset($_POST["kirim"])) {
        if (edit($_POST, $id) > 0) {
            echo("<script>
                    alert('Data berhasil diedit!');
                    document.location.href='../../index.php';
                </script>");
        }else {
            echo("<script>
                    alert('Data gagal diedit!');
                    document.location.href='../../index.php';
                </script>");
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Edit Data Siswa</title>
    </head>
    <body>
        <h1>Edit Data Siswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="potoLama" value="<?= $student['poto'];?>">
            <table>
                <tr>
                    <td><label for="poto">Poto</label></td>
                    <td> : </td>
                    <td><img src="../img/<?= $student["poto"]?>" width="50px"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="file" name="poto" id="poto" value="<?= $student['poto'];?>"></td>
                </tr>
                <tr>
                    <td><label for="nis">NIS</label></td>
                    <td> : </td>
                    <td><input type="number" name="nis" id="nis" value="<?= $student['nis'];?>"></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td> : </td>
                    <td><input type="text" name="nama" id="nama" value="<?= $student['nama'];?>"></td>
                </tr>
                <tr>
                    <td><label for="kelas">Kelas</label></td>
                    <td> : </td>
                    <td><input type="text" name="kelas" id="kelas" value="<?= $student['kelas'];?>"></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td> : </td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?= $student['jurusan'];?>"></td>
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