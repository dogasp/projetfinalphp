<?php 
	echo "<h1>Récapitulatif de votre commande :</h1></br>";
	echo "<h2>Titulaire</h2>";
	$d1 = date("d/m (Y) h:i:s");
	echo "Commande passer le : $d1 par :";
	
		if (($_POST["sexe"]=="homme")=="homme") {
			echo " Monsieur ".$_POST["LastName"]." ".$_POST["FirstName"];
		}
		elseif (($_POST["sexe"]==="femme")=="femme") {
			echo " Madame ".$_POST["LastName"]." ".$_POST["FirstName"];
		}
	
	echo " à ".$_POST["City"]."     ".$_POST["postal"]."</br>";
	echo "<h2>Vos coordonnées :</h2>";
	echo "Télephone : ".$_POST["Phone"]."</br>";
	echo "Adresse de livraison : ".$_POST["Adress"]."</br>";
	if (($_POST["adressFactu"])!="") {
		echo "Adresse de facturation :";
		print_r($_POST["adressFactu"]);
	}
	elseif (($_POST["adressFactu"])=="") {
		echo "L'adresse de facturation est la même que celle de livraison";
	}
	if (($_POST["email"])!="") {
		echo "</br>Votre adresse mail où vous allez recevoir nos offres prochaines : ";
		print_r($_POST["email"]);
	}
	elseif (($_POST["email"])=="") {
		echo "</br>Vous n'avez pas souhaité recevoir nos futurs offres par mail";
	}
	echo "<h2>Vos Achats :</h2>";
	echo "<b> Montant de votre panier : ".$_POST["panier"]."€ </b> <br> <br>";
	if (($_POST["Achat"])!="") {
		echo " Vous avez acheté les articles suivant : ".$_POST["Achat"];
	}
	elseif (($_POST["Achat"])=="") {
		echo "</br>Vous n'avez pas d'article";
	}
	
?>