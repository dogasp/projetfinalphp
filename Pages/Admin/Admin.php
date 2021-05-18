<?php
    include "function.php";
    $message = "<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1>";
    if ($_SESSION["USER"] == -1){ #si l'utilisateur n'est pas connecté, il n'as pas acces à cette page
        exit($message);
    }
    $users = explode("\n", file_get_contents("../../BDD/user.txt", true)); #extraction des utilisateurs
    $list = explode("|", $users[$_SESSION["USER"]]);
    if ($list[7] != 2){
        exit($message); #si l'utilisateur n'est pas un admin, il ne peux pas acceder à la page
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    
</body>
</html>