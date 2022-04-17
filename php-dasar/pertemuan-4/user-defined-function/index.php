<?php
  // user defined function
  // tidak mengembalikan nilai
  echo("Function tidak mengembalikan nilai <br><br>");
  function kenalan () {
    echo("Hallo Nama saya Refal");
  }
  // pemanggilan function
  kenalan();
  
  echo("<hr>");
  
  // function dengan parameter dan argumen
  // bisa diisi parameter default
  echo("Function dengan parameter dan argumen <br><br>");
  function salam ($waktu, $nama) {
    echo("Selamat $waktu, $nama");
  }
  salam("Pagi", "Refal");
  
  echo("<hr>");
  
  // function mengembalikan nilai
  echo("Function mengembalikan nilai <br><br>");
  $nama = "Refal Falah";
  function kenalin () {
    global $nama;
    return "Hallo nama saya $nama";
  }
  echo kenalin();
  
  echo("<hr>");
  
  // function di dalam function
  function hobyku ($hoby){
    return $hoby;
  }
  
  function tentangku ($namaku) {
    echo("Nama Aku $namaku <br>");
    echo("Hoby ku ".hobyku("Nonton Film"));
  }
  
  tentangku("Refal");
  
  echo("<hr>");
  
  // function rekursif
  function faktorial ($angka) {
    if ($angka < 2) {
      return 1;
    }else {
      return $angka * faktorial($angka-1);
    }
  }
  
  echo("Faktorial 3 adalah ".faktorial(3));
?>