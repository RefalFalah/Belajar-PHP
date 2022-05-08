<?php
    // jalankan session
    session_start();
    
    // cek ada session nya tidak
    if (!isset($_SESSION["login"])) {
        header("Location : ../login/index.php");
    }
    
     // menghubungkan ke file fungsi
    require("../fungsi/index.php");
    
    // ambil data di url
    $id = $_GET["id"];
    
    // cek data berhasil dihapus atau tidak
    if (hapus($id) > 0) {
        echo("<script>
                alert('Data berhasil dihapus!');
                document.location.href='../../index.php';
            </script>");
    }else {
        echo("<script>
                alert('Data berhasil dihapus!');
                document.location.href='../../index.php';
            </script>");
    }
?>