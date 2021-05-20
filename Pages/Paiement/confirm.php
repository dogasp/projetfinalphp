<?php
include "../../Generic/function.php";

$cotisation= $_POST['cotisation'];

if ($cotisation==0) {
	echo "Merci pour votre achat";
	$users = explode("\n", file_get_contents("../../BDD/user.txt", true));
	$list = explode("|", $users[$_SESSION["USER"]]);

	$list[8] = 1;
	closeDB($list, $users, $_SESSION["USER"], "user");

}
else  {
	echo "Merci de votre cotisation";

	$users = explode("\n", file_get_contents("../../BDD/user.txt", true));
	$list = explode("|", $users[$_SESSION["USER"]]);
	$list[7] += $_POST["ids"];
}

header("Location: ../../index.php", true, 301);
?>