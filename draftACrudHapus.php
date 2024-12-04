<?php
    include "./draftACrudKoneksi.php";
?>

<?php
    $txtNim = $_GET['nim'];
    
    if($dbKampus->query("delete from mhs where nim=$txtNim;")) {
        header("Location:./draftACRUD.php");
    }
    else {
        echo "Error: hapus data mahasiswa gagal" . "<br>" . $dbKampus->error;
    }
?>