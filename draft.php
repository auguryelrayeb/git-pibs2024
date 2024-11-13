<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRAFT PHP</title>

    <?php
        $nama = array("Yohana", "Damian", "Bianca", "Barry", "Saddam");
    ?>
    <style>
        table {
            border: 1px solid black;
        }
        tr {
            border: 1px solid black;
        }
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <th>NAMA</th>
        
        <?php foreach($nama as $item) { ?>
            <tr>
                <td> <?php echo $item; ?> </td>
            </tr>
        <?php } ?>
    </table>


</body>
</html>


<?php
    
    
?>