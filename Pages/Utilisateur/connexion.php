<?php
	session_start();
	$identifiant = explode(PHP_EOL, file_get_contents("../../BDD/user.txt", true));
    $pseudo = $_POST['Identifiant']; 
    $password = $_POST['password'];
	$valide = 0;

	echo count($identifiant);

    foreach($identifiant as $donnee){
		$list = explode("|", $donnee);
        if($list[4] == $pseudo && $list[5] == $password){
            $connecte = $list[8];
			$valide = 1;
			$_SESSION["USER"] = $list[0];
			$_SESSION["UserEvent"] = $list[6];
        }
    }

	if ($valide == 0){
		$connecte = "email ou mot de passe incorrect";
	}

	echo $connecte;
?>