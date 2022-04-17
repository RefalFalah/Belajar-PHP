<?php
  // super global get
  // merupakan array associative
  // cara menambahkan data
  $_GET["nama"] = "Refal";
  $_GET["kelas"] = "XI RPL 2";
  
  // menampilkan isi $_GET
  var_dump($_GET);
  
  /*
  khusus untuk GET ini ada cara lain untuk memasukan datanya 
  yaitu menggunakan string di urlnya cara nya tambahkan 
  tanda tanya (?) di akhir urlnya, contoh:
  http://localhost:8000/Belajar%20PHP/php-dasar/pertemuan-7/get/index.php?nama=Refal
  
  kalau mau nambah selain nama tinggal pake dan (&), contoh:
  http://localhost:8000/Belajar%20PHP/php-dasar/pertemuan-7/get/index.php?nama=Refal&kelas=XI%20RPL%202
  */
?>