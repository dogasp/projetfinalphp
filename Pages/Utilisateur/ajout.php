<?php
    $email = $_GET['email']; 
    $nom = $_GET['nom']; 
    $password = $_GET['password'];
    $password2 = $_GET['password2'];
	$cotise = "non";
	$pseudo = $_GET['Pseudo'];

	if($password == $password2){
		//$file = new SplFileObject("donnees.txt");
		//foreach ($file as $line) {
    		// echo $file->key()."|". $line;
		//}
    	$tmp = array($email."|".$password."|".$nom."|".$cotise."|".$pseudo);
	}
	else echo '<script> window.location.href="http://localhost/Template/inscription.php?$err==mdp"</script>';
		
	//foreach($file as $val){
		//file_put_contents("donnees.txt", $val."",FILE_APPEND);
	//}
	foreach($tmp as $value){
		file_put_contents("donnees.txt", $value."\n", FILE_APPEND);
	}
?>	