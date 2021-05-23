<?php
    include "../../Generic/function.php";

    $users = explode("\n", file_get_contents("../../BDD/user.txt", true));
	$list = explode("|", $users[$_SESSION["USER"]]);

    $sexe = $_POST['sexe'];
	$nom = $_POST['surname'];
	$prenom = $_POST['name'];
    $email = $_POST['email']; 
    $pseudo = $_POST['Pseudo']; 
	$adress = $_POST["adresse"];
	$year = $_POST["year"];	
    $password = $_POST['password'];

    $tmp = array($nom, $prenom, $email, $pseudo, $password, "", "", "", $sexe, $adress, $year);
    for ($i = 1; $i < 12; $i++){
        if ($tmp[$i-1] != "" && $tmp[$i-1] != $list[$i]){
            $list[$i] = $tmp[$i-1];
        }
    }
    closeDB($list, $users, $_SESSION["USER"], "user");

    echo "Changement appliqué";
?>