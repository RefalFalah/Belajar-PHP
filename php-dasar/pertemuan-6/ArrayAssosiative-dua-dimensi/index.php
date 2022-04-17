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
    <title>Array associative</title>
  </head>
  <body>
    <table border="1" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th>Poto</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Sekolah</th>
        </tr>
      </thead>
      <?php foreach ($students as $student): ?>
        <tbody>
          <td>
            <img src="../img/<?= $student["poto"];?>" width="100px" height="100px">
          </td>
          <td><?= $student["nama"];?></td>
          <td><?= $student["kelas"];?></td>
          <td><?= $student["jurusan"];?></td>
          <td><?= $student["sekolah"];?></td>
        </tbody>
      <?php endforeach; ?>
    </table>
  </body>
</html>