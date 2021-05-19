<?php
    include "../../Generic/function.php";

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