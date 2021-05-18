
<?php /*
 
$cotisation=trim($_POST['cotisation'])     
if ($cotisation=0) {
$prix=trim($_POST['prix'])
$nom=trim($_POST['nom']);
$prenom=trim($_POST['Prénom']);
$liste=trim($_POST['liste']); // Liste contenant les ID de la vente 
$tbxid=str_split(string$liste, int$length=1); // sépare chaque id et les met dans un tableau
$produits=fopen('produits.txt','r');  // Pas utile ? 
$produits=explode("\n",file_get_contents("produits.txt", true)); // sépare chaque ligne,produits devient un tableau

}
else{
$nom=trim($_POST['nom']);
$prenom=trim($_POST['Prénom']);
$prix="10";
 } 
*/
 
?>




<!DOCTYPE html>
<html>
<head>
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->


	<link rel="stylesheet" type="text/css" href="forme.css" />
  <script type='text/javascript' src='Paiement.js' > </script>
  <meta charset="utf-8" />
	<title> Paiement</title>
  <center><h1> Procéder au paiement. </h1> </center>
</head>
<body>
	
  <div id=tot1>

	<input id="button" type="button" value="→" onclick="afficher1()" > Paiement par carte bancaire.
	<div id="champ1">
	<form id='f1' action='Confirm.php' method="POST" onsubmit="verif()">
	<fieldset style="width:360px;">
		<legend> <h3> Carte bancaire </h3> </legend>
		<label for="nom"> Propriétaire de la carte </label> <br> 
    	<input type="text" placeholder="Nom  Prénom " name="nom"> <br> 
      <label for="num"> Numéro de la carte </label> <br> 
    	<input type="number" name="num"> </br>
    	<label for="date"> Date de validité : </label> <br> 
    	<label for="month">Mois :</label>
        <select id="month" name="month">
          <option selected>Janvier</option>
          <option>Février</option>
          <option>Mars</option>
          <option>Avril</option>
          <option>Mai</option>
          <option>Juin</option>
          <option>Juillet</option>
          <option>Août</option>
          <option>Septembre</option>
          <option>Octobre</option>
          <option>Novembre</option>
          <option>Décembre</option>
        </select>
        <label for="year">Année :</label>
        <select id="year" name="year">
         <option selected>2021</option>
          <option>2022</option>
          <option>2023</option>
          <option>2024</option>
          <option>2025</option>
          <option>2026</option>
     	  </select> <br>
     	  <label for="code"> Cryptogramme : </label>  
    	<input type="number" name="code"> </br>
     <?php  echo "Total :" .$prix."€"  ?> <br> <br>

    <input type="hidden" name="cotisation" value='<?php echo ($cotisation) ?>' >
     <input type="hidden" name="nom" value='<?php echo ($nom) ?>' >
     <input type="hidden" name="prénom" value='<?php echo ($prénom) ?>' >
     <input type="hidden" name="prix" value='<?php echo ($prix) ?>' > 
    <input type="hidden" name="produits" value='<?php echo ($produits) ?>' > 
    <input type="hidden" name="tbxid" value='<?php echo ($tbxid) ?>' > 
    >?

    	<input type="submit" name="Payer" value="Payer"> 
     


	</fieldset>
</form>
</div>
</div>




	




<div id="panier">
  <fieldset style="width:360px">
  <br> 
  
  <div id=commande style="text-align:center">
    <u> Pannier </u>
<?php  /*  if ($cotisation=0) {
<h2> Commande : </h2>
Produits :
for($i=0; $i<count($produits);i++) {
  $tmp=substr($produits[$i], 1,1)
  for ($j=0; $j<count($tbxid);j++)
    if $tmp=$tbxid[j]
      $ttt=substr($produits[$i], 5,...) // 5 ligne début titre ?? durée ?? Indice à rajouter selon bdd
      echo (<u> $ttt </u> <br>)
}      <br>
Prix total : $prix.€ }

else {
  Produits : Souscription <br>
  prix : 10€ 
}
*/ 
?>
    </div>
</div>
</fieldset>

</body>
</html> 



