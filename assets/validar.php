<?php
	session_start();

	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		require 'conexion.php';
		sleep(2);

		$mysqli->set_charset('utf8');

		$usuario = $mysqli->real_escape_string($_POST['nombre']);
		$pas = $mysqli->real_escape_string($_POST['contra']);

		$encriptar = md5($pas);

		if($nueva_consulta = $mysqli-> prepare("SELECT Username FROM accounts WHERE Username = ? AND Password = ?"))
		{
			$nueva_consulta->bind_param('ss', $usuario, $encriptar);

			$nueva_consulta->execute();

			$resultado = $nueva_consulta->get_result();

			if($resultado->num_rows == 1)
			{
				$datos = $resultado->fetch_assoc();
				$_SESSION['user'] = $datos['Username'];
				echo json_encode(array('error' => false));
			}else{
				echo json_encode(array('error' => true));
			}
			$nueva_consulta->close();
		}
	}

$mysqli->close();
?>