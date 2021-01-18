<?php 
	session_start();	//On démarre une session pour utiliser un panier associé au client
	include_once("fonctions-panier.php");

	$_SESSION['panier'] = array();
	$_SESSION['panier']['table'] = NULL;
	$_SESSION['panier']['nom_produit'] = array();
	$_SESSION['panier']['quantité_produit'] = array();
	$_SESSION['panier']['prix_produit'] = array();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="IHM.css" />
		<title>Accueil Client</title>
	</head>

	<body>
		<?php
			$bdd = new PDO('mysql:host=localhost;dbname=flotte_db', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$requete = $bdd->query('SELECT * FROM jeux_video');	//Lecture de la table "position" depuis la base de données 
		?>
		<div id="bloc_page">
			
			<?php include("entete.php"); ?>
		
			<section>
				<h2>Menu Client</h2>

				<select name="choix_table" id="choix_table">
					<?php 

					?>
				</select>

				<h2 class="Commande"><br /> Liste des articles :</h2>
				<div id="Liste_Article">
					<ul class="Commande">
						<li>Article 1  -  Quantité : <input type="number" step="1" value="0" min="0" max="8">  -  Prix unitaire : €  -  Prix total : €</li>
						<br />
						<li>Article 2  -  Quantité : <input type="number" step="1" value="0" min="0" max="8">  -  Prix unitaire : €  -  Prix total : €</li>
						<br />
						<li>Article 3  -  Quantité : <input type="number" step="1" value="0" min="0" max="8">  -  Prix unitaire : €  -  Prix total : €</li>
					</ul>
				</div>
				<p class="Commande">
					 Prix total : €
				</p>
				<nav>
					<div class="bouton" id="commande">
						<h3><a href="IHM_Commande_Client.html">Commander</a></h3>
					</div>
					<div class="bouton" id="appel_serveur">
						<h3>Appeler un serveur</h3>
					</div>
				</nav>
			</section>

			<?php include("pied_de_page.php"); ?>

		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript">
			//Bouton pour pré-valider la commande
			const elt_commande = document.getElementById('commande');
			elt_commande.addEventListener('click', function commande(event){
				event.preventDefault()
				document.location = "IHM_Commande_Client.php";
			})

			//Appel d'un serveur
			const elt_serveur = document.getElementById('appel_serveur');
			elt_serveur.addEventListener('click', function appel_serveur(event) {
				event.preventDefault()
				if(confirm("Etes-vous sur de vouloir appeler un serveur ?")){
					alert("Un serveur a été appelé.")
				}
				else{
					
				}
			})

			//Bouton de retour
			const elt_retour = document.getElementById('Retour');
			elt_retour.addEventListener('click', function client(event){
				event.preventDefault()
				document.location = "IHM_Accueil.php";
			})
		</script>
	</body>
</html>