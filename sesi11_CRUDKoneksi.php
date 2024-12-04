<?php
    $dbKampus = new mysqli("localhost", "augury", "augury", "kampus");

    if(mysqli_connect_error()) {
        echo "gagal koneksi, dengan kesalahan:" . "<br/>";
        echo mysqli_connect_error();
        exit();
    }
?>