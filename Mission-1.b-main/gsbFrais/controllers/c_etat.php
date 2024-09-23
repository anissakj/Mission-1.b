<?php
/** @var PdoGsb $pdo */
include 'views/v_sommairecomptable.php';
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'afficher':{
		
		include("views/v_comptable.php");
		break;
	}
	case 'etatvisiteur':{
        $idVisiteur = $_REQUEST['idVisiteur'];
        $typesfrais = $_REQUEST['typesfrais'];


		getLesInfosFicheFrais()

		//$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("views/v_etat.php");
	}

}