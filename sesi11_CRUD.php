<?php 
    include "sesi11_CRUDKoneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
<form method="post" action="./sesi11_CRUDTambah.php">
    NIM: <input type="text" name="nim">
    NAMA: <input type="text" name="nama">
    KODE PRODI: <input type="text" name="kdprodi">
    <button type="submit">TAMBAH DATA</button>
</form>
<br/>
<hr>

<?php
    $rsMhs = $dbKampus->query("select * from mhs");
?>

<table>
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>KODE PRODI</th>
        <th>TOOLS</th>
    </tr>

<?php
    while($dataMhs = $rsMhs->fetch_object()) {
?>
        <tr>
            <td><?php echo $dataMhs->nim; ?></td>
            <td><?php echo $dataMhs->nama; ?></td>
            <td><?php echo $dataMhs->kdProdi; ?></td>
            <td><button onclick="document.location='./sesi11_CRUDHapus.php?nim=<?php echo $dataMhs->nim; ?>'">HAPUS</button></td>
            <td><button onclick="document.location='./sesi11_CRUDUbah.php?nim=<?php echo $dataMhs->nim; ?>'">UBAH</button></td>
        </tr>
<?php
    }
?>

</table>

</body>
</html>