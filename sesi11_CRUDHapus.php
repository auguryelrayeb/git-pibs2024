<?php 
    include "sesi11_CRUDKoneksi.php";
?>

<?php
    $txtNim = $_GET['nim'];
    
    if($dbKampus->query("delete from mhs where nim=$txtNim;")) {
        header("Location:./sesi11_CRUD.php");
    }
    else {
        echo "Error: hapus data mahasiswa gagal" . "<br>" . $dbKampus->error;
    }
?>