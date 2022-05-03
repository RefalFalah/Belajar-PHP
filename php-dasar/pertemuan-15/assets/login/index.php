<?php
    // menghubungkan ke file fungsi
    require("../fungsi/index.php");
    
    if (isset($_POST["login"])) {
        // ambil dulu data
        $username = $_POST["username"];
        $password = $_POST["password"];
        // query
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        // cek username
        if (mysqli_num_rows($result)) {
            // cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                header('Location : ../../index.php');
                exit;
            }
        }
        $error = true;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Halaman Login</title>
    </head>
    <body>
        <h1>Halaman Login</h1>
        <?php if (isset($error)): ?>
            <p style="color: red; font-style: italic;">Username / Password salah</p>
        <?php endif; ?>
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
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="login">Login</button></td>
                </tr>
            </table>
        </form>
        <p>Anda belum punya akun? <a href="../registrasi/index.php">Registrasi</a></p>
    </body>
</html>