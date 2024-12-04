<?php 
    include "sesi11_CRUDKoneksi.php";
?>

<?php
    $txtNim = $_POST['nim'];
    $txtNama = $_POST['nama'];
    $txtKdProdi = $_POST['kdprodi'];

    if($dbKampus->query("insert into mhs values ('$txtNim', '$txtNama', '$txtKdProdi');")) {
        header("Location:./sesi11_CRUD.php");
    }
    else {
        echo "Error: insert into mahasiswa" . "<br>" . $dbKampus->error;
    }
?>