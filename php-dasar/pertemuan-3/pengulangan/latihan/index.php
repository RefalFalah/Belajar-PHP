<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Latihan Pengulangan</title>
  </head>
  <body>
    <table border="1" cellpadding = "10" cellspacing = "0">
      <?php for ($i = 1; $i <= 5; $i++) :?>
        <tr>
          <?php for ($j = 1; $j <= 5; $j++) :?>
            <td><?= "$i , $j";?></td>
          <?php endfor;?>
        </tr>
      <?php endfor;?>
    </table>
  </body>
</html>