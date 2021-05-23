<?php
    if (!isset($_POST["sexe"])){
        exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
    }
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