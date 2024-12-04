<?php include("./sesi12-singleFileCRUD-koneksi.php"); ?>

<?php
    // Kalau hapus data
    if(isset($_GET['hapus'])) {
        $parNim = $_GET['nim'];
        $DB->query("delete from mhs where nim=$parNim");
        // header("location:sesi12-singleFileCRUD.php");
    }

    if(isset($_POST['frmId'])) {
        // Kalau tambah data
        if($_POST['frmId'] == "frmTambah") {
            /*data yang akan disimpan ke tabel*/
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];  
            $kdProdi = $_POST['kdProdi'];

            //query insert statement dan periksa apakah insert berhasil*/
            if($DB->query("insert into mhs values ('$nim', '$nama', '$kdProdi');")) {
                echo " ";
            }
            else {
                echo "Error: insert into mahasiswa" . "<br>" . $DB->error;
            }
        }

        // Kalau ubah data
        if($_POST['frmId'] == "frmUbah") {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];  
            $kdProdi = $_POST['kdProdi'];

            if($DB->query("update mhs set nama='$nama', kdProdi='$kdProdi' where nim=$nim")) {
                echo " ";
            }
            else {
                echo "Error: update mahasiswa" . "<br>" . $DB->error;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 12 PHP & MySqli Single File CRUD</title>
    <style>
        .tblData {
            border: solid 1px black;
        }
        .tblData td {
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <form action="./sesi12-singleFileCRUD.php" method="POST" id="frmTambah">
        <b>FORM TAMBAH DATA</b>
        <table>
            <tr>
                <td align="right"><label for="nim">NIM :</label></td><td><input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td  align="right"><label for="nama">NAMA :</label></td><td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td  align="right"><label for="kdProdi">KODE PRODI :</label></td><td><input type="text" name="kdProdi" id="kdProdi"></td>
            </tr>
            <tr>
                <td  align="right"></td><td align="right"><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
        <input type="hidden" value="frmTambah" name="frmId" id="frmId1" >
    </form>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" id="frmUbah" style="display: none;">
        <b>FORM UBAH DATA</b>
        <table>
            <tr>
                <td align="right"><label for="nim">NIM :</label></td><td><input type="text" name="fnim" id="fnim" disabled></td>
            </tr>
            <tr>
                <td  align="right"><label for="nama">NAMA :</label></td><td><input type="text" name="nama" id="unama"></td>
            </tr>
            <tr>
                <td  align="right"><label for="kdProdi">KODE PRODI :</label></td><td><input type="text" name="kdProdi" id="ukdProdi"></td>
            </tr>
            <tr>
                <td  align="right"></td><td align="right"><button type="reset" id="batalUbah">BATAL</button><input type="submit" value="UBAH"></td>
            </tr>
        </table>
        <input type="hidden" value="<?php echo($varNim); ?>" name="nim" id="unim" >
        <input type="hidden" value="frmUbah" name="frmId" id="frmId2">
    </form>
    <hr>

    <?php
        /*query akses data di tabel*/
        $hasilQuery = $DB->query("select * from mhs");
        $no = 1;
    ?>

    <table class="tblData">
        <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>PRODI</th><th>KELOLA</th></tr>
        <?php while($data=$hasilQuery->fetch_object()) { ?>
            <tr>
                <td><?php echo($no);?></td>
                <td><?php echo($data->nim); ?></td>
                <td><?php echo($data->nama); ?></td>
                <td><?php echo($data->kdProdi); ?></td>
                <td>
                    <button onclick="ubah('<?php echo($data->nim); ?>', '<?php echo($data->nama); ?>', '<?php echo($data->kdProdi); ?>');" class="ubah">UBAH</button>
                    <button onclick="document.location='sesi12-singleFileCRUD.php?hapus=true&&nim=<?php echo($data->nim); ?>'">HAPUS</button>
                </td>
            </tr>
        <?php 
            $no = $no + 1;
        } ?>
    </table>

    <hr>
    
</body>
<script>
    const btnBatalUbah = document.getElementById("batalUbah");
    const formTambah = document.getElementById("frmTambah");
    const formUbah = document.getElementById("frmUbah");
    
    btnBatalUbah.addEventListener("click", () => {
        formUbah.style.display = "none";
        formTambah.style.display = "";
        document.querySelector("#fnim").value = "";
        document.querySelector("#unim").value = "";
        document.querySelector("#unama").value = "";
        document.querySelector("#ukdProdi").value = "";
    });

    let ubah = (parNim, parNama, parKdProdi) => {
            formUbah.style.display = "";
            formTambah.style.display = "none";
            document.querySelector("#fnim").value = parNim;
            document.querySelector("#unim").value = parNim;
            document.querySelector("#unama").value = parNama;
            document.querySelector("#ukdProdi").value = parKdProdi;
        }
</script>

</html>