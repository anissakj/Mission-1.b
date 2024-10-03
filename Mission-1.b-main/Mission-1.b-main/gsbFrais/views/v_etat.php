
<h2>--Etat de tous les frais par visiteur--</h2>


<form method="POST" action="index.php?uc=etat&action=etatvisiteur">
<h3>Visiteur</h3>
<br>
<div class ="encadre">
    <table>

 
    <thead>
    
      <tr>Mois</tr>&nbsp 
      <tr>Montant</tr>&nbsp 
    <tr>Devise</tr>
    </thead>
    <tbody>&nbsp
  
    <?php foreach ($resultat as $leresultat):?>  
        <tr>
   
        <td><?=$leresultat['mois'];?></td>&nbsp
       <td><?=$leresultat['montant_total'];?></td>&nbsp
       

</tr>
<?php endforeach?>
    </tbody>
    </table>
  </div></form>