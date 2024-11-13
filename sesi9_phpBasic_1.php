<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="fNama">NAMA :</label><input type="text" id="fNama" name="fnama">
        <button type="submit" name="kirim">Masuk</button>
    </form>

    <div id="keluaran">
        <?php
            if(isset($_POST['kirim'])) {
                if($_POST['fnama']!=="") {
                    echo "Hello " . $_POST['fnama'];
                }
                else {
                    echo "Hello World !";
                }

            }
            else {
                echo "Hello World !";
            }
        ?>
    </div>

</body>
</html>


