<?php
    if (!isset($_POST["id"])){
        exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
    }
    echo '<select name="'.$_POST["id"].'" id="dataSelect" onchange="recupForm()">';
    echo '<option value=""> --Choisissez un Element-- </option>';
    $list = explode("\n", file_get_contents("../../BDD/".$_POST["id"].".txt", true));
    for($i = 0; $i < count($list); $i++){
        $tmp = explode("|", $list[$i]);
        echo "<option value = '".$i."'>".$tmp[4]."</option>";
    }
    echo "<br><br></select>";
    echo "<div id='result_data'></div>";
?>