<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi FORM dengan PHP</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        // inisialisasi variabel
        $nama = $email = $jk = $komentar = "";
        $namaErr = $emailErr = $jkErr = $komentarErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //validasi input
            if(empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi";
            }
            else {
                $nama = $_POST["nama"];
            }

            if(empty($_POST["email"])) {
                $emailErr = "Email harus diisi";
            }
            else {
                $email = $_POST["email"];
            }

            if(empty($_POST["komentar"])) {
                $komentarErr = "Email harus diisi";
            }
            else {
                $komentar = $_POST["komentar"];
            }
            
            if(empty($_POST["jk"])) {
                $jkErr = "Email harus diisi";
            }
            else {
                $jk = $_POST["jk"];
            }
        }
    ?>
    
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><span class="error"> * <?php echo $namaErr; ?></span>
        <br/><br/>
        Email: <input type="text" name="email" value="<?php echo $email; ?>"><span class="error"> * <?php echo $emailErr; ?></span>
        <br/><br/>
        Komentar: <textarea name="komentar" rows="5" cols="40"><?php echo $komentar; ?></textarea>
        <br/><br/>
        Jenis Kelamin:
            <input type="radio" name="jk" value="pria" <?php if (isset($jk) && $jk=="pria") echo "checked";?>>Pria
            <input type="radio" name="jk" value="wanita" <?php if (isset($jk) && $jk=="wanita") echo "checked";?>>Wanita
            <span class="error">* <?php echo $jkErr;?></span>
        <br/><br/>
        <button type="submit">KIRIM</button>
    </form>

    <?php
        echo "<h2>Isian anda:</h2>";
        echo $nama;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $komentar;
        echo "<br>";
        echo $jk;
    ?>
</body>
</html>