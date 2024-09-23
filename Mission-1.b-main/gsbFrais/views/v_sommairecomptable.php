<!-- Division pour le sommaire -->
<nav class="menuLeft">
    <ul class="menu-ul">
        <li class="menu-item"><a href="index.php">retour</a></li>

        <li class="menu-item">
            Comptable :<br>
            <?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom'] ?>
        </li>

        <li class="menu-item">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>

        <li class="menu-item">
            <a href="index.php?uc=etat&action=afficher" title="etat">Etat de tous les frais par visiteur</a>
        </li>

    </ul>
</nav>
<section class="content">







