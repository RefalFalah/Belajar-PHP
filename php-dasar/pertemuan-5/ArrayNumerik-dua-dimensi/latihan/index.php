<?php
  $matriks = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
  ];
?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Latihan array 2 dimensi</title>
  </head>
  <body>
    <?php foreach ($matriks as $matrik): ?>
      <?php foreach ($matrik as $tampil): ?>
        <div><?= $tampil;?></div>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </body>
</html>