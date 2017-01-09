<?php
session_start();
/*include "../inc/db.php";

$last = $_SESSION["last_login"];
$user = $_SESSION["user"];
$sql = "update users set last_login = '$last' where user = '$user'";
$resultado = mysqli_query($conexion, $sql);
if($resultado){
	unset($_SESSION);
	session_destroy();
	header("location: ../index.php");
}else{
	echo "Error: " . mysqli_error($conexion);
}*/

session_unset(); 
session_destroy(); 

header("location: ../index.php");

?>