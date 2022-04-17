<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Contoh POST</title>
  </head>
  <body>
    <form action="" method="post" accept-charset="utf-8">
      <table border="0">
        <tr>
          <td><label for="nama">Nama</label></td>
          <td>:</td>
          <td><input type="text" name="nama" id="nama" /></td>
        </tr>
        <tr>
          <td><button type="submit" name="kirim">Kirim</button></td>
        </tr>
      </table>
    </form>
    <?php if (isset($_POST["kirim"])): ?>
      <p>Selamat Datang, <?=$_POST["nama"];?></p>
    <?php endif; ?>
  </body>
</html>