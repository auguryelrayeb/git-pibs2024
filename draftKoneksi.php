<?php 
 	$DB= new mysqli("localhost", "augury", "augury", "kampus");

	if(mysqli_connect_errno()) {
		echo("gagal koneksi, pesan kesalahan:" . mysqli_connect_error());
		exit();
	}
?>