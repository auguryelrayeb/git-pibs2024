<?php
    include "./draftCRUDKoneksi.php";
?>

<?php
    $txtNim = $_POST['nim'];
    $txtNama = $_POST['nama'];
    $txtKdProdi = $_POST['kdprodi'];

    if($dbKampus->query("insert into mhs values ('$txtNim', '$txtNama', '$txtKdProdi');")) {
        header("Location:http://localhost/scripts/git-pibs2024/draftCRUD.php");
    }
    else {
        echo "Error: insert into mahasiswa" . "<br>" . $dbKampus->error;
    }
?>
