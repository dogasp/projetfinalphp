<?php
    #"Test : ".$_POST["id"]." et ".$_POST["db"];

    if ($_POST["db"] == "user"){
        $users = explode("\n", file_get_contents("../../BDD/user.txt", true)); #extraction des utilisateurs
        $list = explode("|", $users[$_POST["id"]]);
        echo "<form id='Detail'>";

        echo "Nom de famille : <input type ='text' name = 'lastname' placeholder='".$list[1]."'><br>";
        echo "Prenom : <input type ='text' name = 'firstname' placeholder='".$list[2]."'><br>";
        echo "mail : <input type ='text' name = 'mail' placeholder='".$list[3]."'><br>";
        echo "pseudo : <input type ='text' name = 'nickname' placeholder='".$list[4]."'><br>";
        echo "Mot de passe : <input type ='text' name = 'password' placeholder='".$list[5]."'><br>";
        echo "rôle (0 non cotisé, 1 membre, 2 admin) : <br> <input type ='text' name = 'role' placeholder='".$list[8]."'><br><br>";

        echo "<input name='".$_POST["db"].",".$_POST["id"]."' type='button' value='Appliquer les changements' onClick='saveChange(this)'>";
        echo "</form>";
    }
    if ($_POST["db"] == "event"){
        $events = explode("\n", file_get_contents("../../BDD/event.txt", true)); #extraction des utilisateurs
        $list = explode("|", $events[$_POST["id"]]);
        echo "<form id='Detail'>";

        echo "Titre : <input type ='text' name = 'title' placeholder='".$list[1]."'><br>";
        echo "Endroit : <input type ='text' name = 'place' placeholder='".$list[2]."'><br>";
        echo "Date de début (yyyy/mm/jj hh:mm:ss) : <br> <input type ='text' name = 'startingdate' placeholder='".$list[3]."'><br>";
        echo "Date de fin (yyyy/mm/jj hh:mm:ss) : <br> <input type ='text' name = 'endingdate' placeholder='".$list[4]."'><br>";
        echo "Description : <input type ='text' name = 'password' placeholder='".$list[5]."'><br>";
        echo "Places : <input type ='text' name = 'qt' placeholder='".$list[6]."'><br><br>";

        echo "<input name='".$_POST["db"].",".$_POST["id"]."' type='button' value='Appliquer les changements' onClick='saveChange(this)'>";
        echo "</form>";
    }
    if ($_POST["db"] == "product"){
        $products = explode("\n", file_get_contents("../../BDD/product.txt", true)); #extraction des utilisateurs
        $list = explode("|", $products[$_POST["id"]]);
        echo "<form id='Detail'>";

        echo "Quantité : <input type ='text' name = 'quantity' placeholder='".$list[1]."'><br>";
        echo "Prix : <input type ='text' name = 'price' placeholder='".$list[2]."'><br>";
        echo "Emplacement image : <br> <input type ='text' name = 'image' placeholder='".$list[3]."'><br>";
        echo "Description : <br> <input type ='text' name = 'description' placeholder='".$list[4]."'><br><br>";

        echo "<input name='".$_POST["db"].",".$_POST["id"]."' type='button' value='Appliquer les changements' onClick='saveChange(this)'>";
        echo "</form>";
    }
?>