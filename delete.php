<?php
require "Function.php";

    $id = $_GET["IdMhs"];

    if(hapus($id) > 0) {
        echo "
        <script>
        alert('data berhasil dihapus!');
        document.location.href = 'admin.php';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('data gagal dihapus!');
        document.location.href = 'admin.php';
        </script> 
        ";
    }

?>