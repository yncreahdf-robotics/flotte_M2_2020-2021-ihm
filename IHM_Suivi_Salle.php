<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="IHM.css" />
		<title>Suivi des robots</title>
	</head>

	<body>
		<div id="bloc_page">
			
			<?php include("entete.php"); ?>
		
			<section>
				<nav id="Suivi_Salle">
					<div id="map">
						<h3>Position en temps réel des robots dans la salle</h3>
						<img src="images/Map_Robot.png" alt="Map des robots dans la salle" id="map_robot" />
					</div>
					<div id="Tableau">
						<h3>Liste et état des tables de la salle</h3>
						<table>
							<thead>
								<tr>
									<th>Table</th>
									<th>Etat</th>
									<th></th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<th>Table</th>
									<th>Etat</th>
									<th></th>
								</tr>
							</tfoot>

							<tbody>
								<tr>
									<td>Table 1</td>
									<td>Occupée</td>
									<td><input type="submit" value="Libérer la table" id="table1" /></td>
								</tr>
								<tr>
									<td>Table 2</td>
									<td>Occupée</td>
									<td><input type="submit" value="Libérer la table" id="table2" /></td>
								</tr>
								<tr>
									<td>Table 3</td>
									<td>Occupée</td>
									<td><input type="submit" value="Libérer la table" id="table3" /></td>	
								</tr>
							</tbody>
						</table>
					</div>
				</nav>
			</section>

			<?php include("pied_de_page.php"); ?>

		</div>
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript">
			const elt_table1 = document.getElementById('table1');
			elt_table1.addEventListener('click', function table1(event) {
				//Lien BDD pour changer l'état de la table vers "Libre"
			})

			//Bouton de retour
			const elt_retour = document.getElementById('Retour');
			elt_retour.addEventListener('click', function retour(event){
				event.preventDefault()
				document.location = "IHM_Page_Proprietaire.php";
			})
		</script>
	</body>
</html>