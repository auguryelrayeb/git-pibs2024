<?php 
    include "sesi11_CRUDKoneksi.php";
?>

<?php
    $txtNim = $_POST['nim'];
    $txtNama = $_POST['nama'];
    $txtKdProdi = $_POST['kdprodi'];

    if ($dbKampus->query("update mhs set nama='$txtNama', kdProdi='$txtKdProdi' where nim=$txtNim;")) {
        header("Location:./sesi11_CRUD.php");
    }
    else {
        echo "Error: ubah data gagal " . "<br>" . $dbKampus->error;
    }
?>