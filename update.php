<?php
require 'Function.php';

$id = $_GET["IdMhs"];

$mhs = query("SELECT * FROM tblmahasiswa WHERE IdMhs = $id")[0];

// cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])) {
    

    //eck apakah data berhasil diubah atau tidak
    if(update($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'admin.php';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'admin.php';
        </script> 
        ";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <h1>update data mahasiswa</h1>

    <form action="" method="post">

    <input type="hidden" name="IdMhs" value="<?= $mhs["IdMhs"];?>">

        <table>
            <tr>
            <td>
                <label for="Nama">Nama : </label>
                </td>
                <td>
                <input type="text" name="Nama" id="Nama" require value="<?= $mhs["Nama"];?>">
            </td>
            </tr>
            <tr>
            <td> 
                <label for="Nim">NIM : </label>
            </td>
            <td>
                <input type="text" name="Nim" id="Nim" require value="<?= $mhs["Nim"];?>">
            </td>
            </tr>
            <tr>
            <td>
                <label for="Prodi">Prodi : </label>
                </td>
                <td>
                <input type="text" name="Prodi" id="Prodi" require value="<?= $mhs["Prodi"];?>">
            </td>
            </tr>  
            <tr>
            <td>
                <label for="TglLahir">Tanggal Lahir : </label>
                </td>
                <td>
                <input type="date" name="TglLahir" id="TglLahir" require value="<?= $mhs["TglLahir"];?>">
                </td>    
            </tr>
            <tr>
            <td>
                <label for="JenisKelamin">Jenis Kelamin : </label>
                </td>
                <td>
                <input type="text" name="JenisKelamin" id="JenisKelamin" require value="<?= $mhs["JenisKelamin"];?>">
            </td>
            </tr>
            <tr>
            <td>
                <label for="Agama">Agama : </label>
                </td>
                <td>
                <input type="text" name="Agama" id="Agama" require value="<?= $mhs["Agama"];?>">
                </td>    
            </tr>
            <tr>
            <td>
                <label for="Alamat">Alamat : </label>
                </td>
                <td>
                <input type="text" name="Alamat" id="Alamat" require value="<?= $mhs["Alamat"];?>">
                </td>    
            </tr>
            <tr>
            <td>
                <label for="Email">Email : </label>
                </td>
                <td>
                <input type="text" name="Email" id="Email" require value="<?= $mhs["Email"];?>">
                </td>    
            </tr>
            <tr>
            <td>
                 <button type ="submit" name="submit">Update Data!</button>
            </td> 
            </tr>
            </table>

    </form>

</body>
</html>