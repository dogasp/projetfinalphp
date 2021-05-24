<?php
	if (!isset($_POST["sexe"])){
		exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
	}
	session_start();
	$users = explode("\n", file_get_contents("../../BDD/user.txt", true));
	$list = explode("|", end($users));
	$id = strval(intval($list[0]) + 1);

	$sexe = $_POST['sexe'];
	$nom = $_POST['surname'];
	$prenom = $_POST['name'];
    $email = $_POST['email']; 
    $pseudo = $_POST['Pseudo']; 
	$adress = $_POST["adresse"];
	$year = $_POST["year"];	
    $password = $_POST['password'];

	$newList = $id."|".$nom."|".$prenom."|".$email."|".$pseudo."|".$password."|||0|".$sexe."|".$adress."|".$year;
	array_push($users, $newList);
	$tmp = implode("\n", $users);

	$file = fopen("../../BDD/user.txt", "w");
	fwrite($file, $tmp);
	fclose($file);

	$_SESSION["USER"] = $id;
	$_SESSION["UserEvent"] = "";

	header("Location: modifier.php");
?>	