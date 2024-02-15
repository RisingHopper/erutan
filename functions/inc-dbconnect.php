<?php
	global $db;
	//Local
	$dbHost = 'localhost';
	$dbName = 'erutan';
	$dbUser = 'root';
	$dbPassword = '';

	//Produccion
	// $dbHost = 'localhost';
	// $dbName = 'u112313080_erutan';
	// $dbUser = 'u112313080_admin_erutan';
	// $dbPassword = '~vU7O&V%R=j=lNS=';
		
	try {
		$db = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'Error al conectarse a la base de datos: ' . $e->getMessage();
		exit;
	}


?>