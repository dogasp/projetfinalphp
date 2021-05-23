<?php
	session_start();
	$users = explode("\n", file_get_contents("../../BDD/user.txt", true));
	array_pop($users);
	$list = explode("|", end($users));
	$id = $list[0] + 1;

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
	$tmp = implode("\n", $users)."\n";

	$file = fopen("../../BDD/user.txt", "w");
	fwrite($file, $tmp);
	fclose($file);

	$_SESSION["USER"] = $id;
	$_SESSION["UserEvent"] = "";

	header("Location: modifier.php");
?>	