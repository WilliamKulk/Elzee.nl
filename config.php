<?php
ob_start();

try {
	$con = new PDO("mysql:dbname=elzee;host=localhost", "root", '');
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e) {
	echo "Connectie niet mogelijk: " . $e->getMessage();
}
?>