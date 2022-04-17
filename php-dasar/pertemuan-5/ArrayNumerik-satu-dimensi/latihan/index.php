<?php
  // latihan array 1 dimensi
  $students = ["Refal", "Fyn", "Nabila"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Latihan array</title>
  </head>
  <body>
    <?php foreach ($students as $student) :?>
      <ul>
        <li><?= $student;?></li>
      </ul>
    <?php endforeach;?>
  </body>
</html>