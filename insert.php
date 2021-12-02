<?php
require 'Function.php';
// cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"]) ) {
    var_dump($_POST);

    //eck apakah data berhasil di tambahkan atau tidak
    if(tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'admin.php';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'admin.php';
        </script> 
        ";
    }

//     // ambil data dari tiap elemen  dalam form
//     $nrp = $_POST["nrp"];
//     $nama = $_POST["nama"];
//     $email = $_POST["email"];
//     $jurusan= $_POST["jurusan"];
//     $gambar= $_POST["gambar"];

//     //query insert data
//     $query = "INSERT INTO mahasiswa 
//                 VALUES
//               ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar',)
//             ";             
//     mysqli_connect($conn, $query);

// //cek apakah data berhasil di tambahkan atau tidak
// if(mysqli_affected_rows($conn) > 0 ) {
//     echo "berhasil";
// } else {
//     echo "gagal";
//     echo "<br>";
//     echo mysqli_error($conn);
// }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <table>
            <tr>
            <td>
                <label for="Nama">Nama : </label>
                </td>
                <td>
                <input type="text" name="Nama" id="Nama" require>
            </td>
            </tr>
            <tr>
            <td> 
                <label for="Nim">NIM : </label>
            </td>
            <td>
                <input type="text" name="Nim" id="Nim" require>
            </td>
            </tr>
            <tr>
            <td>
                <label for="Prodi">Prodi : </label>
                </td>
                <td>
                <input type="text" name="Prodi" id="Prodi" require>
            </td>
            </tr>  
            <tr>
            <td>
                <label for="TglLahir">Tanggal Lahir : </label>
                </td>
                <td>
                <input type="date" name="TglLahir" id="TglLahir" require>
                </td>    
            </tr>
            <tr>
            <td>
                <label for="JenisKelamin">Jenis Kelamin : </label>
                </td>
                <td>
                <input type="text" name="JenisKelamin" id="JenisKelamin" require>
            </td>
            </tr>
            <tr>
            <td>
                <label for="Agama">Agama : </label>
                </td>
                <td>
                <input type="text" name="Agama" id="Agama" require>
                </td>    
            </tr>
            <tr>
            <td>
                <label for="Alamat">Alamat : </label>
                </td>
                <td>
                <input type="text" name="Alamat" id="Alamat" require>
                </td>    
            </tr>
            <tr>
            <td>
                <label for="Email">Email : </label>
                </td>
                <td>
                <input type="text" name="Email" id="Email" require>
                </td>    
            </tr>
            <tr>
            <td>
                 <button type ="submit" name="submit">Tambah Data!</button>
            </td> 
            </tr>
            </table>

    </form>

</body>
</html>