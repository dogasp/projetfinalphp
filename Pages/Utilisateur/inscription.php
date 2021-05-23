<!DOCTYPE html>
<html lang="en">
<head>
	<title>LE VESTIAIRE </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="img/BDS.jpg"/>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

	<body onload="Formulaire()">
	<script>
            function Formulaire() {
                var birthdate=document.getElementById("list");//on se place dans ID list 
                for (var i = 1990; i<2005; i++) { //probleme pour la boucle for : année de naissance
                var opt = document.createElement('option');//on crée un une balise option
                opt.text = i;//avec comme texte i
                opt.value = i;//avec comme value i
                birthdate.appendChild(opt);}
            }
        </script>
		<div class="limiter">
			<div class="container-login100" style="background-image: url('img/BDS_garde.jpg');">
				<div class="wrap-login100 p-t-30 p-b-50">
					<span class="login100-form-title p-b-41">
					</span>
					<form class="login100-form validate-form p-b-33 p-t-5" action="ajout.php" method="POST">

						<div class="wrap-input100 validate-input" style="text-align: center;">
                            <label for="homme">Homme : </label><input type="radio" name="sexe" value="homme"  required id="homme">
    			            <label for="femme">Femme : </label><input type="radio" name="sexe" value="femme" required id="femme">
                        </div>

						<div class="wrap-input100 validate-input" data-validate = "Entrez Nom">
							<input class="input100" type="text" name="surname" placeholder="Nom" autocomplete="off" required>
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Entrez prenom">
							<input class="input100" type="text" name="name" placeholder="Prénom" autocomplete="off" required>
							<span class="focus-input100"></span>
						</div>

                        <div class="wrap-input100 validate-input" data-validate = "Entrez Pseudo">
							<input class="input100" type="text" name="Pseudo" placeholder="Pseudo"  autocomplete="off" required>
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Entrez Mail">
							<input  type="email" class="input100" name="email" placeholder="Email" autocomplete="off" required>
							<span class="focus-input100"></span>
						</div>

                        <div class="wrap-input100 validate-input" data-validate="Entrez adresse">
							<input class="input100" type="text" name="adresse" placeholder="Adresse"  autocomplete="off" required>
							<span class="focus-input100"></span>
						</div>

                        <div class="wrap-input100 validate-input" data-validate="Entrez password">
							<input class="input100" type="password" name="password" placeholder="mot de passe" autocomplete="off" required>
							<span class="focus-input100"></span>
						</div>

                        <div class="wrap-input100 validate-input" style="text-align: center;">
                            <label for="list">Année de naissance : </label><select id="list" type="date" name="year"></select>
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