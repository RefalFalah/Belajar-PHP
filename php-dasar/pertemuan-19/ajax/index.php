<?php
    // menghubungkan ke file fungsi
    require("../assets/fungsi/index.php");
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM students WHERE
                nis LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                kelas LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'";
    $students = query($query);
?>
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