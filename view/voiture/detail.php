<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail</title>
</head>
<body>

<?php

		echo ' <h1> Detail voiture: </h1>';

		echo ' Immatriculation: ' . $v->getImmatriculation(). '<br>';
		echo ' Marque: ' . $v->getMarque(). '<br>';
		echo ' Couleur: ' . $v->getCouleur(). '<br>';


?>

</body>
</html>
