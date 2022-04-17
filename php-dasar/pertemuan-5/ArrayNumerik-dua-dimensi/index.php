<?php
  // array 2 dimensi
  $students = [
    ["Refal", "XI RPL 2", "SMK Assalaam Bandung"],
    ["Fynn", "XI RPL 3", "SMK Assalaam Bandung"]
  ];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Array 2 dimensi</title>
  </head>
  <body>
    <?php foreach ($students as $student): ?>
      <ul>
        <li><?= $student[0]?></li>
        <li><?= $student[1]?></li>
        <li><?= $student[2]?></li>
      </ul>
    <?php endforeach; ?>
  </body>
</html>