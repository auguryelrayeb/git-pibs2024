<?php
    include "./draftACrudKoneksi.php"
?>

<?php
    $txtNim = $_POST['nim'];
    $txtNama = $_POST['nama'];
    $txtKdProdi = $_POST['kdprodi'];

    if($dbKampus->query("insert into mhs values ('$txtNim', '$txtNama', '$txtKdProdi');")) {
        header("Location:./draftACRUD.php");
    }
    else {
        echo "Error: insert into mahasiswa" . "<br>" . $dbKampus->error;
    }
?>