<?php
	include_once "config.php";
    try{
		$db = new PDO("mysql:host=".$db_server.";dbname=".$db_name.";port=".$db_port, $db_user, $db_pass);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		$message = "Ocurrió un ERROR al conectar a base de datos ";
		exit;
	}
?>