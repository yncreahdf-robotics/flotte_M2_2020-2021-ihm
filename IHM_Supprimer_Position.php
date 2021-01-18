<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="IHM.css" />
		<title>Supprimer une position</title>
	</head>

	<body>
		<div id="bloc_page">
			
			<?php include("entete.php"); ?>
		
			<section>
				<h2>Sélectionner la position à supprimer</h2>
				<form method="post" action="">
   					<p>
       					<input type="radio" name="Position" value="Recharge" id="Recharge" /> <label for="Recharge">Recharge</label><br />
       					<br />
    					<input type="radio" name="Position" value="Table1" id="Table1" /> <label for="ID_212">Table 1</label><br />
    					<br />
       					<input type="radio" name="Position" value="Table2" id="Table2" /> <label for="ID_146">Table 2</label><br />
       					<br />
       					<input type="radio" name="Position" value="Table3" id="Table3" /> <label for="ID_146">Table 3</label><br />
       					<br />
       					<input type="radio" name="Position" value="Bar" id="Bar" /> <label for="ID_146">Bar</label><br />
   					</p>
				</form>
				<br />
				<nav>
					<input type="button" name="Supprimer" value="Supprimer" id="supprimer" />
				</nav>
			</section>

			<?php include("pied_de_page.php"); ?>

		</div>
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript">
			const elt = document.getElementById('supprimer');
			elt.addEventListener('click', function supprimer(event) {
				event.preventDefault()
				if(confirm("Etes-vous sur de vouloir supprimer cette position ?")){
					alert("La position a été supprimée");
					document.location = "IHM_Liste_Positions.php";
				}
				else{

				}
			})

			//Bouton de retour
			const elt_retour = document.getElementById('Retour');
			elt_retour.addEventListener('click', function retour(event){
				event.preventDefault()
				document.location = "IHM_Liste_Positions.php";
			})
		</script>
	</body>
</html>