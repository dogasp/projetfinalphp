<?php
	#on affiche un message à ceux qui n'ont rien à faire ici
	if (!isset($_POST["cotisation"])){
        exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
    }
	include "../../Generic/function.php";

	$cotisation = $_POST['cotisation'];

	if ($cotisation==0) {
		#il s'agit d'un achat
		echo "Merci pour votre achat";
		$users = explode("\n", file_get_contents("../../BDD/user.txt", true)); #récupération des données
		$list = explode("|", $users[$_SESSION["USER"]]);

		$ids = $_POST["produits"];

		$list[7] = $list[7].$ids; # ajout des produits achetés à la liste de l'utilisateur

		closeDB($list, $users, $_SESSION["USER"], "user");	#fermeture de la base de donnée

		$produits = explode("\n", file_get_contents("../../BDD/product.txt", true)); #récupération de la base des données des produits
		foreach (str_split($ids) as $item){		#pour chaque produit, on retire 1 en quantité disponible
			$list = explode("|", $produits[intval($item)]);
			$list[1] = strval(intval($list[1])-1);
			$produits[intval($item)] = implode("|", $list);
		}

		#fermeture de la base de donnée
		$tmp = implode("\n", $produits);
		$file = fopen("../../BDD/product.txt", "w");
		fwrite($file, $tmp);
		fclose($file);
	}
	else  {
		echo "Merci de votre cotisation";

		#récupération données utilisateur
		$users = explode("\n", file_get_contents("../../BDD/user.txt", true));
		$list = explode("|", $users[$_SESSION["USER"]]);
		$list[8] = 1;

		closeDB($list, $users, $_SESSION["USER"], "user");#fermeture de la base de donnée

	}
?>