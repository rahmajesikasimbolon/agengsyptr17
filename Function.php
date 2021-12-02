<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "mahasiswa";
$conn = mysqli_connect($host, $user, $pass, $db);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
   
    }
    return $rows;
}


function tambah ($data) {
    global $conn;

    $Nim = htmlspecialchars($data["Nim"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Email = htmlspecialchars($data["Email"]);
    $Prodi= htmlspecialchars($data["Prodi"]);
    $TglLahir=  htmlspecialchars($data["TglLahir"]);
    $JnsKelamin=  htmlspecialchars($data["JenisKelamin"]);
    $Agama=  htmlspecialchars($data["Agama"]);
    $Alamat=  htmlspecialchars($data["Alamat"]);
    
    
    
    $query = "INSERT INTO tblmahasiswa 
                VALUES
              ('', '$Nama', '$Nim', '$Prodi', '$TglLahir', '$JnsKelamin', '$Agama', '$Alamat', '$Email')
            ";             
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;

    $id = $_GET["IdMhs"];
    mysqli_query($conn, "DELETE FROM tblmahasiswa WHERE IdMhs = $id");
    return mysqli_affected_rows($conn);
}

function update($data) {
    global $conn;


    $IdMhs = $data["IdMhs"];
    $Nim = htmlspecialchars($data["Nim"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Email = htmlspecialchars($data["Email"]);
    $Prodi= htmlspecialchars($data["Prodi"]);
    $TglLahir=  htmlspecialchars($data["TglLahir"]);
    $JnsKelamin=  htmlspecialchars($data["JenisKelamin"]);
    $Agama=  htmlspecialchars($data["Agama"]);
    $Alamat=  htmlspecialchars($data["Alamat"]);
    
    $query = "UPDATE tblmahasiswa SET 
                Nama = '$Nama',
                Nim = '$Nim',
                Prodi = '$Prodi',
                TglLahir = '$TglLahir',
                JenisKelamin = '$JnsKelamin',
                Agama = '$Agama',
                Alamat = '$Alamat',
                Email = '$Email' 
                WHERE IdMhs = $IdMhs
                ";             
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);

    }



?>