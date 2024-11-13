
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Include</title>
</head>
<body>
    <h1>LATIHAN INCLUDE</h1>
    <P>
        Tampilan di bawah garis merupakan hasil dari include
    </P>
    <h2>REGISTER</h2>
    <form action="#" method="post">
        <label for="fnama">NAMA: </label>
        <input type="text" id="fnama" name="fnama"><br/>
        <label for="fprodi">PRODI: </label>
        <input type="text" id="fprodi" name="fprodi"><br/>
        <button type="submit" name="kirim">Daftar</button>
    </form>
    <hr>


    <?php
            if(isset($_POST['kirim'])){
                echo "submitted";
            }
            else {
                echo "Hello World !";
            }
            // $nama = $_POST['fnama'];
            // $prodi = $_POST['fprodi'];
            // echo $nama . " - " . $prodi;
        
            

        //   include './draft2i.php';
    ?>
</body>
</html>