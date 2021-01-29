<?php
	require 'phpMQTT.php'

	$Robot = $_POST["Robot"];
	$Position = $_POST["Position"];

	try{
		$bdd = new PDO('mysql:host=192.168.1.5;dbname=flotte_db', 'ihm', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}


?>