<?php
session_start();
	include "assets/header.html";
	require "assets/menu.html";
	include "assets/panel-med_init.html";
	/*--------------Inicia Contenido----------------------*/
	?>
	<legend>Información</legend>

	<?php

	require "inc/conn.php";
	$user = $_SESSION["session"]['user'];
	$id_user = $_SESSION["session"]['id_user'];
	/*echo "El valor de session es: " . $user;*/


	if ($user == ""){
		echo "<script>
				location.href = 'logout.php';
			  </script>
		 ";

		 $hay_acceso = "select status from users where id_user = '$id_user'";
		$query = mysqli_query($link, $hay_acceso);
		$data = mysqli_fetch_array($query);

		if($data['status'] == 1){
			echo "<script>
				location.href = 'logout.php';
			  </script>
		 ";

		 //echo $data['status'];
		}

	}else{

		
			echo "<br/>Verificamos si no hay otro intento de acceso";

			$consult = "select email, login, tel from users where id_user = '$id_user'";

			$query = mysqli_query($link, $consult);
			$data = mysqli_fetch_array($query);

			echo "<br/>Correo electronico: " . $data['email'];
			echo "<br/>Ultimo Acceso: ". $data[1];
			echo "<br/>Telefono: ". $data['tel'];

		
	}//alse verifica $user==""

	

	/*--------------Finaliza Contenido----------------------*/
	include "assets/panel-med_final.html";
	include ("assets/footer.html");
?>