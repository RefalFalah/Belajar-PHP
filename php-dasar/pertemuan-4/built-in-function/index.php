<?php
  // date
  // untuk menampilkan tanggal dengan format tertentu
  echo date("l, d M Y");
  echo("<br>");
  
  // time
  // UNIX Timestamp / EPOCH time
  // detik yang sudah berlalu dari 1 january 1970 sampai saat ini
  echo time();
  echo("<br>");
  // contoh menampilkan 3 hari ke depan pake "+" kalau mau sebalik nya tinggal pake "-"
  echo date("l",time()+ 60*60*24*3);
  echo("<br>");
  
  // mktime
  // membuat sendiri detik
  // mktime(0,0,0,0,0,0) paramter nya ada 6
  // jam,menit,detik,bulan,tanggal,tahun
  // contoh menampilkan hari lahir kita
  echo date("l",mktime(0,0,0,10,10,2004));
?>