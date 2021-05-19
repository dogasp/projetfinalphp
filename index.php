<?php
    session_start();
    if (!defined($_SESSION["USER"]) || !isset($_SESSION["USER"])){
        $_SESSION["USER"] = "0";
        $_SESSION["UserEvent"] = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Page pour acceder aux liens </h1>

    <a href="./Pages/Event/Event.php">Events</a><br>
    <a href="./Pages/Admin/Admin.php">Admin</a><br>
    <a href="./Pages/Magasin/Magasin.php">Magasin</a>

</body>
</html>