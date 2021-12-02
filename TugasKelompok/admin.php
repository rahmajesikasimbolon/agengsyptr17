<?php
require 'functions.php';
$mhs = query("SELECT * FROM tblmahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="insert.php">Tambah Data mahasiswa</a>


    <table border = '1' cellpadding = '10' cellspacing ='0'>

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama Mahasiswa</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Email</th>
    </tr>
    <?php $i = 1; 
    foreach ($mhs as $row) : ?>
    <tr>
    <td><?= $i.'.' ?></td>
    
    <td>
       <a href="update.php?IdMhs=<?= $row["IdMhs"]; ?>">Ubah</a>
        <a href="delete.php?IdMhs=<?= $row["IdMhs"]; ?>">Hapus</a>
    
    </td>
    <td><?= $row["Nama"] ?></td>
    <td><?= $row["Nim"]?></td>
    <td><?= $row["Prodi"] ?></td>
    <td><?= $row["TglLahir"] ?></td>
    <td><?= $row["JenisKelamin"] ?></td>
    <td><?= $row["Agama"] ?></td>
    <td><?= $row["Alamat"] ?></td>
    <td><?= $row["Email"] ?></td>
    </tr>
    <?php $i++; 
    endforeach ?>
    </table>
</body>
</html>