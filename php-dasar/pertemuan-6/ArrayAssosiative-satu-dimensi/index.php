<?php
  // array associative (indeks nya string yang kita buat sendiri)
  $students = [
    "nama" => "Refal",
    "kelas" => "XI RPL 2",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "sekolah" => "SMK Assalaam Bandung"
  ];
  
  // menampilkan array associative
  echo($students["nama"]."<br><br>");
  
  // menampilkan array associative dengan looping
  foreach ($students as $student) {
    echo($student."<br>");
  }
?>