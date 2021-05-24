<?php
    if (!isset($_POST["id"])){
        exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
    }
    include "../../Generic/function.php";

    #changement sur l'event
    $events = explode("\n", file_get_contents("../../BDD/event.txt", true));
    $list = explode("|", $events[$_POST["id"]]);
    $list[6] = strval(intval($list[6]) + 1);

    closeDB($list, $events, $_POST["id"], "event");

    #changements sur l'utilisateur
    $users = explode("\n", file_get_contents("../../BDD/user.txt", true)); #extraction des utilisateurs
    $list = explode("|", $users[$_SESSION["USER"]]);

    $list[6] = str_replace($_POST["id"], "", $list[6]);
    $_SESSION["UserEvent"] = $list[6];

    closeDB($list, $users, $_SESSION["USER"], "user");

    echo "Event bien annulé !";
?>