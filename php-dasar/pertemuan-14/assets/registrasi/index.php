<?php
    // menghubungkan ke file fungsi
    require("../fungsi/index.php");
    
    if (isset($_POST["registrasi"])) {
        if (registrasi($_POST) > 0) {
            echo("<script>
                    alert('Registrasi berhasil!');
                </script>");
        }else {
            echo(mysqli_error($conn));
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Halaman Registrasi</title>
    </head>
    <body>
        <h1>Halaman Registrasi</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td><label for="password2">Ulangi password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password2" id="password2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="registrasi">Registrasi</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>