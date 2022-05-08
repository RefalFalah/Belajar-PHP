<?php
    // operator PHP
    // aritmatika
    // +, -, *, /, %
    echo("Aritmatika <br><br>");
    $angka1 = 5;
    $angka2 = 2;
    $tambah = $angka1 + $angka2;
    $kurang = $angka1 - $angka2;
    $kali = $angka1 * $angka2;
    $bagi = $angka1 / $angka2;
    $sisa_bagi = $angka1 % $angka2;
    echo("$angka1 + $angka2 = $tambah <br>");
    echo("$angka1 - $angka2 = $kurang <br>");
    echo("$angka1 * $angka2 = $kali <br>");
    echo("$angka1 / $angka2 = $bagi <br>");
    echo("$angka1 % $angka2 = $sisa_bagi <hr><br>");
  
    // penggabung string / concat
     // .
    echo("Concat <br><br>");
    $nama_depan = "Refal";
    $nama_belakang = "Falah";
    echo($nama_depan ." ". $nama_belakang . "<hr><br>");
  
    // assigment
    // =, +=, -=, *=, /=, %=, .=
    echo("Assigment <br><br>");
    $bilangan1 = 2;
    $bilangan1 += 3;
    echo("2 += 3 = $bilangan1 <br>");
    $bilangan2 = 3;
    $bilangan2 -= 2;
    echo("3 -= 2 = $bilangan2 <br>");
    $bilangan3 = 4;
    $bilangan3 *= 3;
    echo("4 *= 3 = $bilangan3 <br>");
    $bilangan4 = 6;
    $bilangan4 /= 2;
    echo("6 /= 2 = $bilangan4 <br>");
    $bilangan5 = 5;
    $bilangan5 %= 2;
    echo("5 %= 2 = $bilangan5 <br>");
    $nama = "Refal";
    $nama .= " ";
    $nama .= "Falah";
    echo("$nama <hr><br>");
  
    // perbandingan 
    // <, >, <=, >=, ==, !=
    echo("Perbandingan <br><br>");
    var_dump(1 < 5);
    echo("<br>");
    var_dump(1 > 5);
    echo("<br>");
    var_dump(1 <= 5);
    echo("<br>");
    var_dump(1 >= 5);
    echo("<br>");
    var_dump(1 == 5);
    echo("<br>");
    var_dump(1 != 5);
    echo("<hr><br>");
  
     // identitas 
    // ===, !==
    echo("Identitas <br><br>");
    var_dump(1 === "1");
    echo("<br>");
    var_dump(1 !== "1");
    echo("<hr><br>");
  
    // logika
    // && (Semua harus bener)
    //|| (Boleh hanya satu yang bener)
    // ! (Kebalikan)
    echo("Logika <br><br>");
    $x = 10;
    $y = !true;
    var_dump($x > 20 && $x % 2 == 0);
    echo("<br>");
    var_dump($x < 20 || $x % 2 == 1);
    echo("<br>");
    var_dump($y);
?>