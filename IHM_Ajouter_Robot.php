<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="IHM.css" />
		<title>Ajouter un robot</title>
	</head>

	<body>
		<div id="bloc_page">
			
			<?php include("entete.php"); ?>
		
			<section>
				<h2>Saisir le nom du nouveau type de robot</h2>
				<form method="post" action="">
    				<p>
        				<label for="type_robot">Type de robot :</label>
        				<input type="text" name="type_robot" id="type_robot" placeholder="Ex : Robotino" size="30" maxlength="10" />
   					</p>
				</form>
				<p><br /><input type="button" value="Valider" id="valider"><br /></p>
			</section>

			<?php include("pied_de_page.php"); ?>

		</div>
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript">
			const elt = document.getElementById('valider');
			elt.addEventListener('click', function valider(event) {
				alert("Type de robot ajouté.");
				document.location = "IHM_Liste_Robots.php";
			})

			//Bouton de retour
			const elt_retour = document.getElementById('Retour');
			elt_retour.addEventListener('click', function retour(event){
				event.preventDefault()
				document.location = "IHM_Liste_Robots.php";
			})
		</script>
	</body>
</html>