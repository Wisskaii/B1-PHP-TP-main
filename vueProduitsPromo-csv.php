<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SanayaBio</title>

	</head>

	<body>
		
		<?php
		
			$produitsPromo = array( 
			
				"Pipette Compte-Goutte:Accessoire:1" ,
				"Capsule aluminium 20/410:Flaconnage:0.2" ,
				"Capsule service 20/410:Flaconnage:0.25" , 
				"Bandelettes PH - Boîte de 50:Fabrication:2.9" ,
				"Spatule Inox:Fabrication:1.9"
			
			) ;
		
		?>
		
		
		<h1>Produits en promotion</h1>

		<table border='5'>
		<tr>
			<th>Intitulé</th>
			<th>Catégorie</th>
			<th>Prix</th>
		</tr>

		<?php

			$TabLibelle = array();
			$TabCategorie = array();
			$TabPrix = array();
		
			function ranger($produitsPromo){
				global $TabLibelle, $TabCategorie, $TabPrix;
		
				foreach ($produitsPromo as $produit) {
					list($libelle , $categorie , $prix) = explode(":", $produit);
					array_push($TabLibelle, $libelle);
					array_push($TabCategorie, $categorie);
					array_push($TabPrix, $prix);
				}
			}
		
			ranger($produitsPromo);
		
			for ($i = 0; $i < count($TabLibelle); $i++) {
				echo "<tr>
				<td>".$TabLibelle[$i]."</td>
				<td>".$TabCategorie[$i]."</td>
				<td>".$TabPrix[$i]."</td>
				</tr>";
				}
		?>

	</body>
	
</html>
