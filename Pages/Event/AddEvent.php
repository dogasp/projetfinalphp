<?php
include "../../Generic/function.php";

#changement sur l'event
$events = explode("\n", file_get_contents("../../BDD/event.txt", true));
$list = explode("|", $events[$_POST["id"]]);
if ($list[6] == "0"){
    exit("Il n'y a plus de place de disponible.");
}
$list[6] = strval(intval($list[6]) - 1);

closeDB($list, $events, $_POST["id"], "event");

#changements sur l'utilisateur
$users = explode("\n", file_get_contents("../../BDD/user.txt", true)); #extraction des utilisateurs
$list = explode("|", $users[$_SESSION["USER"]]);

$list[5] = $list[5].$_POST["id"];
$_SESSION["UserEvent"] = $list[5];

closeDB($list, $users, $_SESSION["USER"], "user");

echo "Event bien réservé !";
?>