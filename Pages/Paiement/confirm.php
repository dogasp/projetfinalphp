<?php
include "../../Generic/function.php";

$cotisation = $_POST['cotisation'];

if ($cotisation==0) {
	echo "Merci pour votre achat";
	$users = explode("\n", file_get_contents("../../BDD/user.txt", true));
	$list = explode("|", $users[$_SESSION["USER"]]);

	$list[8] = 1;
	closeDB($list, $users, $_SESSION["USER"], "user");

	$ids = $_POST["produits"];

	$produits = explode("\n", file_get_contents("../../BDD/product.txt", true));
	foreach (str_split($ids) as $item){
		$list = explode("|", $produits[intval($item)]);
		$list[1] = strval(intval($list[1])-1);
		$produits[intval($item)] = implode("|", $list);
	}

	$tmp = implode("\n", $produits);
	$file = fopen("../../BDD/product.txt", "w");
	fwrite($file, $tmp);
	fclose($file);
}
else  {
	echo "Merci de votre cotisation";

	$users = explode("\n", file_get_contents("../../BDD/user.txt", true));
	$list = explode("|", $users[$_SESSION["USER"]]);
	$list[8] = 1;

	closeDB($list, $users, $_SESSION["USER"], "user");

}
?>