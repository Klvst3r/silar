<?php

$host_BD = "localhost";
$user_BD = "id11843776_dev";
$pass_BD = "desarrollo";
$name_BD = "id11843776_login";


$link = new mysqli($host_BD, $user_BD, $pass_BD, $name_BD); 

if ($link->connect_errno) { 
	echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $link->connect_error; exit(); 
}else{
	//echo "Conexion Establecida correctamente";
}
	