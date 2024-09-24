
<h2>Etat de tous les frais par visiteur </h2>


<form method="POST" action="index.php?uc=etat&action=etatvisiteur">
<h3>Visiteur</h3>
<div class="encadre">
    <table>
    <thead>
        <tr>Mois </tr>
        <tr>Montant</tr>
    </thead>
    <tbody>
      <?php foreach ($resultat as $leresultat):?>  
        <tr>

        <td><?=$leresultat['mois'];?></td>
         <td><?=$leresultat['montant_total'];?></td>

</tr>
<?php endforeach?>
    </tbody>
    </table>
  </div></form>