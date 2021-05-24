
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


<fieldset>
	<legend>
		Veuillez saisir les informations de votre paiement
	</legend>
	<div class="card-data">
		<p class="picto-field" id="splitCardNumberBlock">
			<label for="cardNumberField" id="cardNumberField-label" class="control-label">Numéro de carte :</label>
			<input aria-labelledby="cardNumberField-label" autocomplete="cc-number" maxlength="19" aria-required="true" id="cardNumberField" class="form-control" name="cardNumberField" type="tel"/>
		</p>
		<div data-zone-parameters="{&quot;t:formid&quot;:&quot;captureCardForm&quot;,&quot;t:formcomponentid&quot;:&quot;payment/card/CaptureCardDetails:capturecardcomponent.capturecardform&quot;}" data-container-type="zone" id="zoneCoBadgingLogo">
			<!-- Empty block-level element to avoid empty tapestry Zone bug -->
			<div style="display:none">
				<input value="NVUSobD4VLzKnn/VVhht/S0TRbE=:H4sIAAAAAAAAAFvzloG1PIwhuCCxMjc1r0Q/ObEoRd85saCktCjVGch2SS1JzMwptkqGCIGkk/NzC/LzgIr1EsuAcolJOalQ3bmpiXnF8QZ6Ofn5BfFGDMVFDHr5Rel6iQWJyRmpeiWJBanFJUWVpnrJ+UWpOZlJenCTivV8gFpUTHX9T17TZKg+ycTAUFEwaJxlZiDwwSJuSY8t2FkAbawX6TIBAAA=" name="t:formdata" type="hidden"/>
			</div>
			<ul class="list-of-cards list-of-cards-CbVisa"></ul>
		</div>
		<fieldset class="k-choice">
			<legend>
				Date d’expiration :
			</legend>
			<p>
				<label for="expirydatefield" id="expirydatefield-label" class="control-label"><span></span></label>
				<span aria-labelledby="expirydatefield-label" class="monthdatafield" id="expirydatefield">
					<label class="month-date-label" for="expirydatefield-month">
						Mois :
						<span class="styledSelect">
							<select autocomplete="cc-month" name="expirydatefield-month" class="date-select" id="expirydatefield-month">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</span>
					</label>
					<label class="year-date-label" for="expirydatefield-year">
						Année :
						<span class="styledSelect">
							<select autocomplete="cc-year" name="expirydatefield-year" class="date-select" id="expirydatefield-year">
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
								<option value="2028">2028</option>
								<option value="2029">2029</option>
								<option value="2030">2030</option>
								<option value="2031">2031</option>
							</select>
						</span>
					</label>
				</span>
			</p>
		</fieldset>
		<p>
			<label for="cvvfield" id="cvvfield-label" class="control-label">Cryptogramme visuel :</label>
			<input aria-labelledby="cvvfield-label" maxlength="3" autocomplete="OFF" id="cvvfield" class="form-control" name="cvvfield" type="tel"/>
		</p>
	</div>
	<div class="conditional"></div>
</fieldset>


</body>
</html> 



