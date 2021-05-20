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
					<span class="login100-form-title p-b-41">
					</span>
					<form class="login100-form validate-form p-b-33 p-t-5" action="ajout.php">

						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" name="nom" placeholder="Nom et Prénom" required="required" autocomplete="off">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Pseudo">
							<input class="input100" type="text" name="Pseudo" placeholder="Pseudo" required="required" autocomplete="off">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter votre email">
							<input  type="email" class="input100" name="email" placeholder="Email" required="required" autocomplete="off">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Confirmer password">
							<input class="input100" type="password" name="password2" placeholder="Confirmation du mot de passe" required="required" autocomplete="off">
							<span class="focus-input100"></span>
						</div>

                    	<br>
						<div class="container-login100-form-btn m-t-32">
							<button class="login100-form-btn">
								S'inscrire
							</button>
						</div>
						<br>
				</div>
			</div>
		</div>
		
	</body>
</html>