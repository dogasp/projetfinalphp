<?php
	$identifiant = explode("\n", file_get_contents("donnees.txt", true));
    $email = $_GET['email']; 
    $password = $_GET['password'];
	$valide = 0;

    foreach($identifiant as $donnee){
		$list = explode("|", $donnee);
        if($list[0] == $email && $list[1] == $password){
            $connecte = "vous etes connecté ";
			$valide = 1;
        }
		if ($valide == 0){
			$connecte = "email ou mot de passe incorrect ";
		}
		
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
				
				<form class="login100-form validate-form p-b-33 p-t-5" action="modifier.php">

                         <div class="wrap-input100 validate-input" data-validate = "Enter username" style="text-align: center;">
                              <?php 
                                   echo $connecte;					
                              ?>
                              
                         </div>
						 <br>
					<div style="text-align : center">
						<div class="container-login100-form-btn m-t-32">
							<button class="login100-form-btn" style="display : flex;"  >
								modifier mes infos
							</button>
							<br>
						</div>
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