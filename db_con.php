<?php

	$hostname = 'localhost';
	$username = 'root';
	$userpwd = '';
	$databasename = 'crudSoap';

	try{
		$dsn = 'mysql:host=localhost';
		$dbh = new PDO("mysql:host=localhost; dbname=" . $databasename . ";", "root", "");
	}

	catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage();
	}

?>