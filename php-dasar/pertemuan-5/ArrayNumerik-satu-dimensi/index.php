<?php
  // array numerik (indeks nya angka)
  // cara menulis array
  // cara lama
  $array1 = array("Refal", "Fynn");
  // cara baru
  $array2 = ["XI RPL 2", "XI RPL 3"];
  
  // menampipkan array 
  print_r($array1);
  echo("<br>");
  var_dump($array2);
  
  echo("<br>");
  
  // menampipkan 1 elemen array
  echo ($array1[0]);
  
  echo("<br>");
  
  // menambah elemen array
  $array2[] = "XI RPL 1";
  print_r($array2);
  
  echo("<br>");
  
  // pengulangan pada array
  // for
  $angka = [1, 2, 3, 4, 5];
  for ($i = 0; $i < count($angka); $i++) {
    echo($angka[$i]);
  }
  
  echo("<br>");
  
  // foreach
  $names = ["Refal", "Fyn"];
  foreach ($names as $name) {
    echo($name." ");
  }
?>