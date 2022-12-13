<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liste Voitures</title>
</head>
<body>

<?php

	foreach($tab_v as $v){

		echo '<p> Voitures d\' immatriculation: 
		<a href="../controller/routeur.php?action=read&immat='.$v->getImmatriculation(). ' "> '. $v->getImmatriculation().' </a>  </p>';


		/*$vimmat = htmlspecialchars($v->get('immatriculation'));
		$vimmat2 = rawurldecode($v->get('immatriculation'));
		
	echo '<p> Voitures d\' immatriculation ' . ' <a href = "../controller/routeur.php?action=read&immat' .$vimmat. ' ">' .$vimmat2 . '</a>.<br>';
	*/
	}

?>



</body>
</html>