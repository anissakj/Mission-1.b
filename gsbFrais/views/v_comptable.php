<h2>Etat de tous les frais par visiteur </h2>

<h3>Visiteur</h3>
<form method="POST" action="index.php?uc=etat&action=etatvisiteur">


    <p>
        <label for="numero">Numero :</label>
        <input id="numero" type="text" name="numero" size="5" >
    </p>
    <p>
        <label for="type">Type de frais :</label>
        <input id="type" type="text" name="type" size="5">
    </p>
    <input type="submit" value="Valider" name="valider">
    <input type="reset" value="Annuler" name="annuler">
<h3>Frais au forfait</h3>

<table>
<tr> <th>Mois</th>
<th>Montant</th></tr>
</table>

</form>


