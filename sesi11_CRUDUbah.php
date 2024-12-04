<?php 
    include "sesi11_CRUDKoneksi.php";
?>

<?php
    $txtNim = $_GET['nim'];
    $rsMhs = $dbKampus->query("select * from mhs where nim=$txtNim");
    $dataMhs = $rsMhs->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah</title>
</head>
<body>
<form method="post" action="./sesi11_CRUDSimpan.php">
    NIM: <input type="text" value="<?php echo $dataMhs->nim; ?>" disabled>
    <input type="hidden" name="nim" value="<?php echo $dataMhs->nim; ?>">

    NAMA: <input type="text" name="nama" value="<?php echo $dataMhs->nama; ?>"> 
    KODE PRODI: <input type="text" name="kdprodi" value="<?php echo $dataMhs->kdProdi; ?>">
    <button type="submit">UBAH DATA</button>
</form>
</body>
</html>