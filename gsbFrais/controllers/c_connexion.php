﻿<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeConnexion':
    {
        include'views/v_menu.php';
        include("views/v_connexion.php");
        break;
    }
    case 'valideConnexion':
    {
        $login = $_REQUEST['login'];
        $mdp = $_REQUEST['mdp'];
        /** @var PdoGsb $pdo */
        $visiteur = $pdo->getInfosVisiteur($login, $mdp);
        $comptable = $pdo->getInfosComptable($login, $mdp);
        if(is_array($visiteur)){
            $id = $visiteur['id'];
            $nom = $visiteur['nom'];
            $prenom = $visiteur['prenom'];
            connecter($id, $nom, $prenom);
            include ("views/v_sommairevisiteur.php");
            include ("views/v_menu.php");
        }
        elseif (is_array($comptable)){
            $id = $comptable['id'];
            $nom = $comptable['nom'];
            $prenom = $comptable['prenom'];
            connecter($id, $nom, $prenom);
            include ("views/v_sommairecomptable.php");
            include ("views/v_menu.php");
        } 
        else {
          
            ajouterErreur("Login ou mot de passe incorrect");
            include("views/v_erreurs.php");
            include("views/v_connexion.php");
        }
        break;
    }
    case 'deconnexion':
    {
        deconnecter();
        include 'views/v_menu.php';
        include("views/v_connexion.php");
        break;
    }
    default :
    {
        include("views/v_connexion.php");
        break;
    }
}
