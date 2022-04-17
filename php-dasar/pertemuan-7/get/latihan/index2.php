<?php
  if (!isset($_GET["poto"])||
      !isset($_GET["nama"])||
      !isset($_GET["kelas"])||
      !isset($_GET["jurusan"])||
      !isset($_GET["sekolah"])) {
      // redirect
      echo("<script>
              alert('Silahkan masuk di daftar siswa');
              document.location.href='index.php';
           </script>");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Latihan Get</title>
  </head>
  <body>
    <h3>Detail Siswa</h3>
    <table>
      <tr>
        <td>
          <img src="../../img/<?= $_GET["poto"]?>" width="100px" height="100px">
        </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $_GET["nama"];?></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><?= $_GET["kelas"];?></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><?= $_GET["jurusan"];?></td>
      </tr>
      <tr>
        <td>Sekolah</td>
        <td>:</td>
        <td><?= $_GET["sekolah"];?></td>
      </tr>
    </table>
    <br />
    <a href="index.php">Kembali ke daftar siswa</a>
  </body>
</html>