<?php
	$nom_bouteille = $_POST["nom_bouteille"];
	$doseur = $_POST["doseur"];


	try{
		$bdd = new PDO('mysql:host=192.168.1.5;dbname=flotte_db', 'ihm', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}

	$requete = $bdd->prepare('INSERT INTO Bouteille_tb(BouteilleName, VolumeDoseur, Emplacement) VALUES(:nom_bouteille, :doseur, 0)');
	$requete->execute(array(
		'nom_bouteille' => $nom_bouteille,
		'doseur' => $doseur
	));

	header('Location: IHM_Liste_Articles');
?>