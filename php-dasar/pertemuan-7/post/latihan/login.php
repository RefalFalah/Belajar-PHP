<?php
  if (isset($_POST["login"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "rahasia") {
      echo("<script>
              alert('anda berhasil login');
              document.location.href='admin.php';
          </script>");
    }else {
      $error = true;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Halaman Login</title>
  </head>
  <body>
    <?php if (isset($error)): ?>
      <p style="color: red; font-style: italic;">Username/Password salah!</p>
    <?php endif; ?>
    <form method="post" accept-charset="utf-8">
      <table>
        <tr>
          <td><label for="username">Username</label></td>
          <td>:</td>
          <td><input type="text" name="username" id="username" /></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td>:</td>
          <td><input type="password" name="password" id="password" /></td>
        </tr>
          <td><button type="submit" name="login">Login</button></td>
        </tr>
      </table>
    </form>
  </body>
</html>