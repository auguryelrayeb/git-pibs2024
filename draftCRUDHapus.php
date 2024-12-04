<?php
    include "./draftCRUDKoneksi.php";
?>

<?php

    $nim = $_GET['nim'];
    if ($dbKampus->query("delete from mhs where nim=$nim;")) {
        header("Location:http://localhost/scripts/git-pibs2024/draftCRUD.php");
    }
    else {
        echo "Error: hapus data gagal " . "<br>" . $dbKampus->error;
    }
?>