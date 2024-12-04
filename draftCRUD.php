<?php
    include "./draftCRUDKoneksi.php";
?>

<?php
    $rsMhs = $dbKampus->query("select * from mhs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MySqli</title>
</head>
<body>

    <form method="post" action="./draftCRUDTambah.php">
        NIM: <input type="text" name="nim">
        NAMA: <input type="text" name="nama">
        KODE PRODI: <input type="text" name="kdprodi">
        <button type="submit">TAMBAH DATA</button>
    </form>

    <br/>
    <hr>
    <table>
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>KODE PRODI</th>
            <th>TOOLS</th>
        </tr>

    <?php
        while($data = $rsMhs->fetch_object()) {
    ?>
            <tr>
                <td><?php echo $data->nim; ?></td>
                <td><?php echo $data->nama; ?></td>
                <td><?php echo $data->kdProdi; ?></td>
                <td><button onclick="document.location = './draftCRUDHapus.php?nim=<?php echo $data->nim; ?>'">HAPUS</button></td>
                <td><button onclick="document.location = './draftCRUDUbah.php?nim=<?php echo $data->nim; ?>'">UBAH</button></td>
            </tr>
    <?php
        }
    ?>

    </table>
</body>
</html>