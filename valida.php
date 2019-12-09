<?php
session_start();
//Se reciben los valores desde el formulario
$usuario = $_POST["user"];
$password = $_POST["pass"];

//Establecer una conexion con la BD

require "inc/conn.php";

//seleccionamos datos de la tbla users
$query = "select id_user, user, pass from users where user ='" . $usuario . "' and pass='" . $password . "' and status='0'";

//ejecutamos consulta
// consulta, conexion-bd
$data = mysqli_query($link, $query);
$info = mysqli_fetch_array($data);

$rows = mysqli_num_rows($data);

//echo "Coincidencias encontradas: " . $rows;

$id_user = $info['id_user'];

//echo "Id User: " . $id_user . "<br/>";

if($rows == 1){
	//echo "Tendremos acceso al sistema";
	$_SESSION["session"] = array (
				"user"			=> $info['user'],
				"id_user"			=> $info['id_user']
			);//$_SESSION
	//echo "usuario: " . $info['user'];
	
	//echo "Datos de registro<br/>";

	$today = date("Y-m-d H:i:s");  

	/*echo "Fecha actual: " . $today;
	echo "<br/> Cuando el usuario ingrese, el estatus en la bd sera el valor 1";*/

	$insert = "UPDATE `users` SET `status` = '1', `login` = '$today' WHERE `users`.`user` = '$usuario' and `users`.`id_user` = '$id_user'";


	$data = mysqli_query($link, $insert);
	echo '<script>location.href = "menu.php"</script>'; 
}else{
	echo "
	<script>
			location.href = 'index.html';
		</script>
	 ";
}

?>