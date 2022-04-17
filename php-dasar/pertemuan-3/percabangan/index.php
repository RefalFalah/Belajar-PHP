<?php
  // percabangan
  // if else
  echo("if else <br>");
  $nilai1 = 90;
  if ($nilai1 >= 90) {
    echo("Anda Lulus");
  }else {
    echo("Anda Tidak lulus");
  }
  
  echo("<hr>");
  
  // if elseif else
  echo("if elseif else <br>");
  $nilai2 = 80;
  if ($nilai2 >= 90) {
    echo("Nilai Anda A");
  }elseif ($nilai2 >= 80) {
    echo("Nilai Anda B");
  }else {
    echo("Nilai Anda dibawah KKM");
  }
  
  echo("<hr>");
  
  //switch 
  $nilai3 = 70;
  switch ($nilai3) {
    case 70:
      echo("Anda lulus");
      break;
    case 60:
      echo("Anda tidak lulus");
      break;
    default:
      echo("Anda tidak ada nilainya");
      break;
  }
?>