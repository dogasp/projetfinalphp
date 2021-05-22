<?php
	session_start();
	$identifiant = explode("\n", file_get_contents("../../BDD/user.txt", true));
	array_pop($identifiant);
    $pseudo = $_POST['Identifiant']; 
    $password = $_POST['password'];
	$valide = 0;

    foreach($identifiant as $donnee){
		$list = explode("|", $donnee);
        if($list[4] == $pseudo && $list[5] == $password){
            $connecte = "vous etes connecté ";
			$valide = 1;
			$_SESSION["USER"] = $list[0];
			$_SESSION["userEvent"] = $list[6];
        }
    }

	if ($valide == 0){
		$connecte = "email ou mot de passe incorrect";
	}

	echo $connecte;
?>