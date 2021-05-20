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

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LE VESTIAIRE </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/BDS.jpg"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/BDS_garde.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				
				<form class="login100-form validate-form p-b-33 p-t-5" action="index.php">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
				
								<p><font size="3">Vous êtes inscrit, veuillez  maintenant vous connecter</font></p>
					</div>
					<br>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Se connecter
						</button>
					</div>
					<br>
				</form>
					<br>
					<br>
			</div>
		</div>
	</div>
	
</body>
</html>

