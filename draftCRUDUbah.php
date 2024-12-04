<?php
    include "./draftCRUDKoneksi.php";
?>

<?php
    $nim = $_GET['nim'];
    $rsMhs = $dbKampus->query("select * from mhs where nim = $nim");
    $data = $rsMhs->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH</title>
</head>
<body>
<form method="post" action="./draftCRUDSimpan.php">
        NIM: <input type="text" name="nim" value="<?php echo $data->nim; ?>" disabled>
        NAMA: <input type="text" name="nama" value="<?php echo $data->nama; ?>">
        KODE PRODI: <input type="text" name="kdprodi" value="<?php echo $data->kdProdi; ?>">
        <button type="submit">UBAH DATA</button>
    </form>
</body>
</html>
