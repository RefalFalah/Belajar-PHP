<?php
    // menjalankan session
    session_start();
    
    // menghubungkan ke file fungsi
    require("../fungsi/index.php");
    
    // cek cookie
    if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
        $id = $_COOKIE["id"];
        $key = $_COOKIE["key"];
        // ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
        // cek cookie dan username
        if ($key === hash("sha256", $row["username"])) {
            $_SESSION["login"] = true;
        }
    }
    
    // cek session
    if (isset($_SESSION["login"])) {
        header('Location: ../../');
        exit;
    }
    
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
                // set session
                $_SESSION["login"] = true;
                // cek remember me
                if (isset($_POST["remember"])) {
                    // set cookie
                    setcookie("id", $row["id"], time() + 60, "/", "localhost", 1);
                    setcookie("key", hash("sha256", $row["username"]), time() + 60, "/", "localhost", 1);
                }
                header('Location: ../../');
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
                    <td>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="login">Login</button></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>
        <p>Anda belum punya akun? <a href="../registrasi/index.php">Registrasi</a></p>
    </body>
</html>