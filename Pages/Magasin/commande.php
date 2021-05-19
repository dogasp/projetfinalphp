<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<title>LE VEISTIAIRE</title>
		<link rel="icon" href="img2/cropped-logo-bds-1-180x180.png" sizes="32x32">
		<link rel="stylesheet" type="text/css" href="Magasin.css" />
		<script type="text/javascript" src="JSMagasin.js"></script>
	</head>

	<body onload="ajouterOnClick();Formulaire();" style="background-image: url(img2/BDS_garde.jpg) ;" id="fct">
		<div id="form">
  			<form action="Résucommande.php" method="POST" >

				<b> Résumé de votre commande</b> <br> <br>
				<textarea style="display: none" name="Achat" id="commande"></textarea> <br>
				<b> Montant de votre panier : <span id="prix"> 0 € </span> </b> <br> <br>
    			<b>Feuille de livraison</b><br><br>
				<label for="adresse">adresse de livraison :</label><textarea  rows="1" cols="25" required name="Adress" placeholder="Entrez votre adresse" id="adresse"></textarea><br>
    			<label for="City">Ville : </label><input type="text" name="City" placeholder="ville" id="City"><br>
    			<label for="postal">Code postal : </label> <input type="text" id="postal" name="postal" maxlength="5" placeholder="95000"/> <br/>
    			<label for="Phone">Téléphone :</label><input type="text" name="Phone" maxlength="10" placeholder="06xxxxxxx"> <br>
    			<br>
    			<label for="mycheck">adresse de facturation est la même :</label><input id="mycheck" type="checkbox" onclick="Formulaire()" checked/><br>
    			<label for="factu" style="display: none">adresse de facturation :</label><textarea  rows="2" cols="30" style="display: none" name="adressFactu" placeholder="Entrez votre adresse de facturation ici !!!" id="factu"></textarea> <br>
    			<label for="mycheck2">Voulez-vous recevoir nos offres par mail :</label><input id="mycheck2" type="checkbox" onclick="Formulaire()"/><br>
    			<label id="email2" for="email" style="display: none">Email :</label><input  style="display: none" name="email" type="email" id="email"/><br>

      			<input type="submit" value="Envoyer les données du formulaire" />
      			<input type="reset" value="Pour tout remettre à zéro" /> <br/>
  			</form>
	  	</div>
	</body>
</html>