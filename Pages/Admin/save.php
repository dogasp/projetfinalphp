<?php
    include "../../Generic/function.php";
    if (!isset($_POST["id"])){
        exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
    }

    $data = explode("\n", file_get_contents("../../BDD/".$_POST["db"].".txt", true)); #extraction des données
    $list = explode("|", $data[$_POST["id"]]);

    for ($i = 1; $i < count($list); $i++){
        if ($_POST["db"] == "user" && $i == 6){
            $i = 8;
        }
        if($_POST[$i] != null){
            $list[$i] = $_POST[$i];
        }
    }
    closeDB($list, $data, $_POST["id"], $_POST["db"]);

    echo "les changements on bien été appliqués";
?>