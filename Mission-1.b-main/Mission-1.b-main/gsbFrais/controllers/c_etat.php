<?php
/** @var PdoGsb $pdo */
include ('views/v_sommairecomptable.php');
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
	
		$resultat = $pdo->getResultat($idVisiteur, $typesfrais,$devise);
		//$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("views/v_etat.php");
		break;
	}

}