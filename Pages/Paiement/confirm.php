<?php
$nom=trim($_POST['nom']);
$prénom=trim($_POST['prénom']);
$prix=trim($_POST['prix']);
$cotisation=trim($_POST['cotisation'])

if ($cotisation=0) {

echo "Nous vous confirmons," .$prénom.$nom. "la bonne récéption de votre commande.  Vous avez commandé".  
for($i=0; $i<count($produits);i++) {
  $tmp=substr($produits[$i], 1,1)
  for ($j=0; $j<count($tbxid);j++)
    if $tmp=$tbxid[j]
      $ttt=substr($produits[$i], 5,...) // 5 ligne début titre ?? durée ?? à completer selon bdd
      echo ( $ttt ) ."pour un total de" .$prix
// actualiser les achats dans le fichier texte de la base  
}
else  {
echo $prénom."Merci de votre cotisation d'un montant de 10€"
// actualiser la cotisation ds la base de données
}



?>
<a href="....."> Acceuil du site </a> <!--  Lien à ajouter -->