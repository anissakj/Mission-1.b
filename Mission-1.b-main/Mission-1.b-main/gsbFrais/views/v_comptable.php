<h2>État de tous les frais par visiteur</h2>

<h3>Visiteur</h3>
<form method="POST" action="index.php?uc=etat&action=etatvisiteur">

    <p>
        <label for="idVisiteur">Numéro :</label>
        <input id="idVisiteur" name="idVisiteur" size="5">
            
    </p>

    <p>
        <label for="typesfrais">Type de frais :</label>
        <input id="typesfrais" name="typesfrais" size="5">
           
    </p>

    <input type="submit" value="Valider" name="valider">
    <input type="reset" value="Annuler" name="annuler">
</form>
