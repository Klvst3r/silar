<?php
session_start();

require "inc/conn.php";

$id_user = $_SESSION["session"]['id_user'];

$update_login = "UPDATE `users` SET `status` = '0' WHERE `users`.`id_user` = '$id_user'";
$data = mysqli_query($link, $update_login);


session_destroy();
session_unset();
mysqli_close($link);


header("location:index.html");
?>