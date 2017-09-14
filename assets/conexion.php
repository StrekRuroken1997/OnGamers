<?php
	$mysqli = new mysqli("localhost", "root", "", "web_sa");

	if(mysqli_connect_errno()){
		echo 'Conexión fallida : ', mysqli_connect_error();
		exit();
	}
?>