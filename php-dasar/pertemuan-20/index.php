<?php
    // jalankan session
    session_start();
    
    // cek ada session nya tidak
    if (!isset($_SESSION["login"])) {
        header('Location: assets/login/index.php');
        exit;
    }
    
    // menghubungkan ke file fungsi
    require("assets/fungsi/index.php");
    
    // query data
    $students = query ("SELECT * FROM students");
    
    // jika tombol cari diklik cari data
    if (isset($_POST["cari"])) {
        $students = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Halaman Admin</title>
        <style>
            .loader {
                width: 100px;
                position: absolute;
                top: 135px;
                left: 280px;
                display: none;
            }
        </style>
    </head>
    <body>
        <h1>Daftar Siswa</h1>
        <a href="assets/logout/index.php">Logout</a>
        <br><br>
        <a href="assets/tambah/index.php">[+] Tambah Data Siswa</a>
        <br><br>
        <form method="post">
            <input type="text" name="keyword" id="keyword" autocomplete="off" placeholder="Masukan keyword pencarian..." size="35" autofocus>
            <button type="submit" name="cari" id="tombolCari">Cari</button>
            <img src="assets/img/loader.gif" class="loader">
        </form>
        <br>
        <div id="container">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Poto</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                    <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= $no;?></td>
                        <td>
                            <a href="assets/edit/index.php?id=<?=$student['id'];?>">Edit</a> |
                            <a href="assets/hapus/index.php?id=<?=$student['id'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data <?= $student['nama'];?> ?');">Delete</a>
                        </td>
                        <td>
                            <img src="assets/img/<?=$student['poto'];?>" alt="" width="80px" height="80px"/>
                        </td>
                        <td><?= $student['nis'];?></td>
                        <td><?= $student['nama'];?></td>
                        <td><?= $student['kelas'];?></td>
                        <td><?= $student['jurusan'];?></td>
                    </tr>
                    <?php $no ++?>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="js/index.js"></script>
    </body>
</html>