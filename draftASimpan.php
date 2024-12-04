<?php
    include "./draftACRUDKoneksi.php";
?>

<?php
    $txtNim = $_POST['nim'];
    $txtNama = $_POST['nama'];
    $txtKdProdi = $_POST['kdprodi'];

    if ($dbKampus->query("update mhs set nama='$txtNama', kdProdi='$txtKdProdi' where nim=$txtNim;")) {
        header("Location:http://localhost/scripts/git-pibs2024/draftACRUD.php");
    }
    else {
        echo "Error: ubah data gagal " . "<br>" . $dbKampus->error;
    }
?>