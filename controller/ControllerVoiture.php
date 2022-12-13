<?php 

require_once ('../model/ModelVoiture.php'); // pour le chargment du modele 

class ControllerVoiture {

    public static function readAll() { 
        $tab_v = ModelVoiture::getAllVoitures(); 
        require ('../view/voiture/list.php'); 
	}

	public static function read($argument){
		$v = ModelVoiture::getVoitureByImmat($argument);
		
		if ($v !=NULL) {
			require ('../view/voiture/detail.php');
		} else{
			require ('../view/voiture/error.php');
		}
	}

	public static function create() {
		require ('../view/voiture/creat.php');
	}

	public static function created($argument){
		ModelVoiture::save($argument);
		$tab_v = ModelVoiture::getAllVoitures();
		require ('../view/voiture/list.php'):
	}

 } 

?>

