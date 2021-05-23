
<?php
	if (!isset($_POST["ids"])){
        exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
    }
	$cotisation= $_POST['cotisation']; #savoir si c'est une cotisation

	if ($cotisation==1) {
		$prix= "10";
	}
	else{
		$prix = $_POST["price"];
	}
	$ids = $_POST["ids"];
?>





<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="forme.css" />
	<script type='text/javascript' src='Paiement.js' > </script>
	<meta charset="utf-8" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

</head>
<body>
	<title> Paiement</title>
  	<center><h1> Procéder au paiement. </h1> </center>
	
	<form id='f1' action='confirm.php' method="POST">
		<fieldset style="width:360px;">
			<legend> <h3> Carte bancaire </h3> </legend>
			<label for="nom"> Propriétaire de la carte </label> <br> 
			<input type="text" placeholder="Nom  Prénom" name="nom"> <br> 
			<label for="num"> Numéro de la carte </label> <br> 
			<input type="number" name="num"> </br>
			<label for="date"> Date de validité : </label> <br> 
			<label for="month">Mois :</label>

			<select id="month" name="month">
				<option selected>Janvier</option>
				<option>Février</option>
				<option>Mars</option>
				<option>Avril</option>
				<option>Mai</option>
				<option>Juin</option>
				<option>Juillet</option>
				<option>Août</option>
				<option>Septembre</option>
				<option>Octobre</option>
				<option>Novembre</option>
				<option>Décembre</option>
			</select>

			<label for="year">Année :</label>
			<select id="year" name="year">
				<option selected>2021</option>
				<option>2022</option>
				<option>2023</option>
				<option>2024</option>
				<option>2025</option>
				<option>2026</option>
			</select> <br>
			<?php  echo "Total :" .$prix."€"  ?> <br> <br>

			<input type="hidden" name="cotisation" value='<?php echo ($cotisation) ?>' >
			<input type="hidden" name="produits" value='<?php echo ($ids) ?>' >

			<input type="button" name="Payer" value="Payer" onClick="pay()"> 
		


		</fieldset>
	</form>	

<div id="panier">
  <fieldset style="width:360px">
  <br> 
  
  <div id=commande style="text-align:center">
    <u> Pannier :</u><br>
	<?php
		$products = explode("\n", file_get_contents("../../BDD/product.txt", true));
		foreach (str_split($ids) as $item){
			$list = explode("|", $products[intval($item)]);
			echo $list[4]." ".$list[2]." €<br>";
		}
	?>
    </div>
</div>
</fieldset>

</body>
</html> 



