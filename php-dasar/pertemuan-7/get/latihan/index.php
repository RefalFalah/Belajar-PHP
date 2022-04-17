<?php
  $students = [
    [
      "poto" => "refal.jpg",
      "nama" => "Refal",
      "kelas" => "XI RPL 2",
      "jurusan" => "Rekayasa Perangkat Lunak",
      "sekolah" => "SMK Assalaam Bandung"
    ],
    [
      "poto" => "nabila.jpg",
      "nama" => "Nabila",
      "kelas" => "XI RPL 2",
      "jurusan" => "Rekayasa Perangkat Lunak",
      "sekolah" => "SMK Assalaam Bandung"
    ]
  ];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Latihan Get</title>
  </head>
  <body>
    <h3>Daftar Siswa</h3>
    <?php foreach ($students as $student): ?>
      <ul>
        <li>
          <a href="index2.php?poto=<?= $student["poto"]?>&nama=<?= $student["nama"]?>&kelas=<?= $student["kelas"]?>&jurusan=<?= $student["jurusan"]?>&sekolah=<?= $student["sekolah"]?>"><?= $student["nama"]?></a>
        </li>
      </ul>
    <?php endforeach; ?>
  </body>
</html>