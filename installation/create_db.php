<?php
	require("../inc/db.php");
	$tables = array();
	
	$tables[0]["name"] = "USERS";
	$tables[0]["columns"] = "name VARCHAR(50),
		lastname VARCHAR(50),
		rfc VARCHAR(15),
		user VARCHAR(50) PRIMARY KEY,
		pass VARCHAR(32),
		email VARCHAR(50),
		phone VARCHAR(50),
		status CHAR(1),
		last_connection TIMESTAMP,
		privileges INT NOT NULL";
	
	$tables[1]["name"] = "CLIENTS";
	$tables[1]["columns"] ="id VARCHAR(32) PRIMARY KEY,
		name VARCHAR(50),
		lastname VARCHAR(50),
		user VARCHAR(50),
		pass VARCHAR(32),
		email VARCHAR(50),
		phone VARCHAR(50),
		rfc VARCHAR(15),
		last_connection TIMESTAMP";
	
	$tables[2]["name"] = "SUPPLIERS";
	$tables[2]["columns"] ="name VARCHAR(50),
		lastname VARCHAR(50),
		user VARCHAR(50),
		pass VARCHAR(32),
		email VARCHAR(50),
		phone VARCHAR(50),
		rfc VARCHAR(15) PRIMARY KEY,
		last_connection TIMESTAMP";
	
	$tables[3]["name"] = "GROUPS";
	$tables[3]["columns"] ="id VARCHAR(50) PRIMARY KEY,
		name VARCHAR(50),
		description TEXT,
		image VARCHAR(30),
		division VARCHAR(50),
		status CHARACTER(1)";
	
	$tables[4]["name"] = "ADDRESSES";
	$tables[4]["columns"] ="id VARCHAR(50) PRIMARY KEY,
		street VARCHAR(50),
		int_number INT(5),
		ext_number INT(5),
		colony VARCHAR(50),
		post_code VARCHAR(6),
		municipe CHAR(1),
		city VARCHAR(20),
		state VARCHAR(20),
		country VARCHAR(20)";
	
	$tables[5]["name"] = "PRODUCTS";
	$tables[5]["columns"] ="id VARCHAR(50) PRIMARY KEY,
		name VARCHAR(50),
		sell_price INT(5),
		description INT(5),
		image VARCHAR(50),
		group_id VARCHAR(6),
		manufacturer VARCHAR(30),
		status CHAR(1),
		recipe VARCHAR(20)";
	
	$tables[6]["name"] = "SUPPLIES";
	$tables[6]["columns"] ="id VARCHAR(50) PRIMARY KEY,
		name VARCHAR(50),
		group_id INT(5),
		description INT(5),
		stock VARCHAR(50),
		measurement VARCHAR(6),
		status CHARACTER(1),
		min VARCHAR(20),
		max VARCHAR(20),
		reorder INT(20)";
		
	$tables[7]["name"] = "RFC";
	$tables[7]["columns"] ="rfc VARCHAR(50) PRIMARY KEY,
		name VARCHAR(50),
		id_address INT(5)";
	
	$tables[8]["name"] = "PERSON_ADDRESS";
	$tables[8]["columns"] ="person_id VARCHAR(50),
		address_id VARCHAR(50)";
	
	$tables[9]["name"] = "SUPPLIER_SUPPLY";
	$tables[9]["columns"] ="supplier VARCHAR(50),
		supply VARCHAR(50),
		purchase_price INT(5),
		delivery_time INT(5),
		comments VARCHAR(50)";
	
	$tables[10]["name"] = "MASTER_PO";
	$tables[10]["columns"] ="id VARCHAR(50) PRIMARY KEY,
		supplier VARCHAR(50),
		date_time TIMESTAMP,
		invoice_id INT(5),
		status VARCHAR(50),
		subtotal INT,
		taxes INT,
		total INT";
	
	$tables[11]["name"] = "DETAILS_PO";
	$tables[11]["columns"] ="po_id VARCHAR(50),
		item_number VARCHAR(50),
		supply TIMESTAMP,
		quantity INT(5),
		amount INT(5)";
	
	$tables[12]["name"] = "MASTER_RECIPE";
	$tables[12]["columns"] ="id VARCHAR(50) PRIMARY KEY,
		cost VARCHAR(50),
		making_time TIME";
	
	$tables[13]["name"] = "DETAILS_RECIPE";
	$tables[13]["columns"] ="recipe_id VARCHAR(50),
		item_number VARCHAR(50),
		supply TIMESTAMP,
		quantity INT(5),
		amount INT(5),
		measurement VARCHAR(50)";
	
	for($i=0; $i<count($tables); $i++){
		echo "\ncreating DB: ".$tables[$i]["name"];
		try{
			$result=$db->prepare("CREATE TABLE ".$tables[$i]["name"]." ("
				.$tables[$i]["columns"].
				")"
			);
			$result->execute();
		}catch (Exception $e){
			echo "No se pudo realizar la consulta: ".$e->getMessage();
			exit;
		}
	}
?>