<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="IHM.css" />
		<title>Ajouter un article</title>
		<script type="text/javascript">
			function aff_bouteille(action){
    			document.getElementById('block_bouteille').style.display = (action == "oui")? "inline" : "none";
			}
			function aff_boisson(action){
    			document.getElementById('block_boisson').style.display= (action == "oui")? "inline" : "none";
			}
		</script>
	</head>

	<body>
		<div id="bloc_page">
			
			<?php include("entete.php"); ?>
		
			<section>
				<h2>Saisir les informations de la nouvelle bouteille ou de la nouvelle boisson</h2>
				<br />
				<div id="Choix_ajout">
					<h3>Que voulez vous ajouter ?</h3>
					<input type="radio" name="Choix_ajout" value="Bouteille" onchange="aff_bouteille('oui'); aff_boisson('non')" /><label for="Bouteille" class="label-radio">Une bouteille</label>
					<br/>
		        	<input type="radio" name="Choix_ajout" value="Boisson" onchange="aff_bouteille('non'); aff_boisson('oui')" /><label for="Boisson" class="label-radio">Une boisson</label><br/>
		        	<br/>
				</div>
				<div id="block_bouteille" hidden="hidden">
					<form method="post" action="ajout_bouteille.php">
	    				<p>
	        				<label for="nom_bouteille">Nom de la bouteille :</label>
	        				<input type="text" name="nom_bouteille" id="nom_bouteille" placeholder="Ex : Ice Tea" size="30" maxlength="10" />
	        				<br />
	        				<br />
	        				<label for="doseur">Doseur associé à la bouteille :</label>
	        				<select name="doseur" id="doseur">
	        					<option value="Emplacement1">25 mL</option>
	        					<option value="Emplacement1">35 mL </option>
	        					<option value="Emplacement2">50 mL</option>
	        				</select>
	        				<br />
	        				<br />
	        				<input type="submit" value="Valider" id="valider">
	        				<br />
	   					</p>
					</form>
				</div>
				<div id="block_boisson" hidden="hidden">
					<form method="post" action="">
	    				<p>
	        				<label for="nom_boisson">Nom de la boisson :</label>
	        				<input type="text" name="nom_article" id="nom_article" placeholder="Ex : Ice Tea" size="30" maxlength="10" />
	        				<br />
	        				<br />
	        				<label for="prix_boisson">Prix :</label>
	        				<input type="text" name="prix_article" id="prix_article" placeholder="Ex : 1€" size="30" maxlength="10" />
	        				<br />
	        				<br />
	        				<label for="volume_boisson">Volume :</label>
	        				<input type="text" name="volume_article" id="volume_article" placeholder="Ex : 20cL" size="30" maxlength="10" />
	        				<br />
	        				<br />
	        				<h3>Composition de la boisson :</h3>
	        				<label for="liquide1">Premier liquide à verser : </label>
	        				<select name="liquide1" id="liquide1">
	        					<option>Ice-Tea</option>
	        					<option>Eau</option>
	        					<option>Sirop de Fraise</option>
	        					<option>Sirop de Menthe</option>
	        					<option>Coca-Cola</option>
	        					<option>Limonade</option>
	        				</select>
	        				<label for="liquide1_dose"> Nombre de dose :</label>
	        				<input type="number" name="liquide1_dose" id="liquide1_dose" placeholder="0" min="0" max="5">
	        				<br /><br />

	        				<label for="liquide2">Deuxième liquide à verser : </label>
	        				<select name="liquide2" id="liquide2" />
	        					<option>Ice-Tea</option>
	        					<option>Eau</option>
	        					<option>Sirop de Fraise</option>
	        					<option>Sirop de Menthe</option>
	        					<option>Coca-Cola</option>
	        					<option>Limonade</option>
	        				</select>
	        				<label for="liquide2_dose"> Nombre de dose :</label>
	        				<input type="number" name="liquide2_dose" id="liquide2_dose" placeholder="0" min="0" max="5">
	        				<br /><br />

	        				<label for="liquide3">Troisième liquide à verser : </label>
	        				<select name="liquide3" id="liquide3" />
	        					<option>Ice-Tea</option>
	        					<option>Eau</option>
	        					<option>Sirop de Fraise</option>
	        					<option>Sirop de Menthe</option>
	        					<option>Coca-Cola</option>
	        					<option>Limonade</option>
	        				</select>
	        				<label for="liquide3_dose"> Nombre de dose :</label>
	        				<input type="number" name="liquide3_dose" id="liquide3_dose" placeholder="0" min="0" max="5">
	        				<br /><br />

	        				<label for="liquide4">Quatrième liquide à verser : </label>
	        				<select name="liquide4" id="liquide4" />
	        					<option>Ice-Tea</option>
	        					<option>Eau</option>
	        					<option>Sirop de Fraise</option>
	        					<option>Sirop de Menthe</option>
	        					<option>Coca-Cola</option>
	        					<option>Limonade</option>
	        				</select>
	        				<label for="liquide4_dose"> Nombre de dose :</label>
	        				<input type="number" name="liquide4_dose" id="liquide4_dose" placeholder="0" min="0" max="5">
	        				<br /><br />

	        				<label for="liquide5">Cinquième liquide à verser : </label>
	        				<select name="liquide5" id="liquide5" />
	        					<option>Ice-Tea</option>
	        					<option>Eau</option>
	        					<option>Sirop de Fraise</option>
	        					<option>Sirop de Menthe</option>
	        					<option>Coca-Cola</option>
	        					<option>Limonade</option>
	        				</select>
	        				<label for="liquide5_dose"> Nombre de dose :</label>
	        				<input type="number" name="liquide5_dose" id="liquide5_dose" placeholder="0" min="0" max="5">
	        				<br /><br />

	        				<label for="liquide6">Sixième liquide à verser : </label>
	        				<select name="liquide6" id="liquide6" />
	        					<option>Ice-Tea</option>
	        					<option>Eau</option>
	        					<option>Sirop de Fraise</option>
	        					<option>Sirop de Menthe</option>
	        					<option>Coca-Cola</option>
	        					<option>Limonade</option>
	        				</select>
	        				<label for="liquide6_dose"> Nombre de dose :</label>
	        				<input type="number" name="liquide6_dose" id="liquide6_dose" placeholder="0" min="0" max="5">
	        				<br /><br />
	        				<br /><input type="submit" value="Valider" id="valider"><br />
	   					</p>
					</form>
				</div>
			</section>

			<?php include("pied_de_page.php"); ?>

		</div>
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript">
			const elt = document.getElementById('valider');
			elt.addEventListener('click', function valider(event) {
				alert("Article ajouté.");
				document.location = "IHM_Liste_Articles.php";
			})

			//Bouton de retour
			const elt_retour = document.getElementById('Retour');
			elt_retour.addEventListener('click', function retour(event){
				event.preventDefault()
				document.location = "IHM_Liste_Articles.php";
			})
		</script>
	</body>
</html>