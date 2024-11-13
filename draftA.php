<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan FORM HTML & PHP</title>
</head>
<body>
    <form action="#" method="post">
        <label for="fnama">NAMA: </label>
        <input type="text" id="fnama" name="fnama"><br/>
        <label for="fprodi">PRODI: </label>
        <input type="text" id="fprodi" name="fprodi"><br/>
        <button type="submit" name="kirim">Kirim</button>
    </form>

    <hr>
    <?php
        if(isset($_POST['kirim'])) {
            $nama = $_POST['fnama'];
            $prodi = $_POST['fprodi'];
            echo "Hello " . $nama . " from " . $prodi;
        }
        else {
            echo "Hello World!";
        }
        
    ?>


</body>
</html>