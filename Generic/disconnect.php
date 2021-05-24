<?php
    if (!isset($_POST["action"]) || $_POST["action"] != "disconnect") {
        exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
    }
    session_start();
    $_SESSION["USER"] = "-1";
    $_SESSION["UserEvent"] = "";
    echo "Vous avez été deconnecté";
?>