<?php
    #"Test : ".$_POST["id"]." et ".$_POST["db"];

    if ($_POST["db"] == "user"){
        $users = explode("\n", file_get_contents("../../BDD/user.txt", true)); #extraction des utilisateurs
        $list = explode("|", $users[$_POST["id"]]);
        echo "<form id='Detail'>";

        echo "<div class='lign_container'>Nom de famille :<input type ='text' name = '1' placeholder='".$list[1]."'></div>";
        echo "<div class='lign_container'>Prenom :<input type ='text' name = '2' placeholder='".$list[2]."'></div>";
        echo "<div class='lign_container'>mail :<input type ='text' name = '3' placeholder='".$list[3]."'></div>";
        echo "<div class='lign_container'>pseudo :<input type ='text' name = '4' placeholder='".$list[4]."'></div>";
        echo "<div class='lign_container'>Mot de passe :<input type ='text' name = '5' placeholder='".$list[5]."'></div>";
        echo "<div class='lign_container'>rôle (0 non cotisé, 1 membre, 2 admin) : <input type ='text' name = '8' placeholder='".$list[8]."'></div>";
        echo "<input type='hidden' value='".$_POST["id"]."' name='id' id='detailId'>";
        echo "<input type='hidden' value='".$_POST["db"]."' name='db' id='detailDb'>";

        echo "<input type='button' value ='Supprimer produit' onClick='deleteElement()'>";
        echo "<input type='button' value='Appliquer les changements' onClick='saveChange(this)'>";
        echo "</form>";
    }
    if ($_POST["db"] == "event"){
        $events = explode("\n", file_get_contents("../../BDD/event.txt", true)); #extraction des utilisateurs
        $list = explode("|", $events[$_POST["id"]]);
        echo "<form id='Detail'>";

        echo "<div class='lign_container'>Titre :<input type ='text' name = '1' placeholder='".$list[1]."'></div>";
        echo "<div class='lign_container'>Endroit :<input type ='text' name = '2' placeholder='".$list[2]."'></div>";
        echo "<div class='lign_container'>Date de début (yyyy/mm/jj hh:mm:ss) : <input type ='text' name = '3' placeholder='".$list[3]."'></div>";
        echo "<div class='lign_container'>Date de fin (yyyy/mm/jj hh:mm:ss) : <input type ='text' name = '4' placeholder='".$list[4]."'></div>";
        echo "<div class='lign_container'>Description : <input type ='text' name = '5' placeholder='".$list[5]."'></div>";
        echo "<div class='lign_container'>Places :<input type ='text' name = '6' placeholder='".$list[6]."'></div>";
        echo "<input type='hidden' value='".$_POST["id"]."' name='id' id='detailId'>";
        echo "<input type='hidden' value='".$_POST["db"]."' name='db' id='detailDb'>";

        echo "<input type='button' value ='Supprimer produit' onClick='deleteElement()'>";
        echo "<input type='button' value='Appliquer les changements' onClick='saveChange(this)'>";
        echo "</form>";
    }
    if ($_POST["db"] == "product"){
        $products = explode("\n", file_get_contents("../../BDD/product.txt", true)); #extraction des utilisateurs
        $list = explode("|", $products[$_POST["id"]]);
        echo "<form id='Detail'>";

        echo "<p>Quantité :<input type ='text' name = '1' placeholder='".$list[1]."'></div>";
        echo "<p>Prix :<input type ='text' name = '2' placeholder='".$list[2]."'></div>";
        echo "<p>Emplacement image : <input type ='text' name = '3' placeholder='".$list[3]."'></div>";
        echo "<p>Description : <input type ='text' name = '4' placeholder='".$list[4]."'></div>";
        echo "<input type='hidden' value='".$_POST["id"]."' name='id' id='detailId'></div>";
        echo "<input type='hidden' value='".$_POST["db"]."' name='db' id='detailDb'></div>";

        echo "<input type='button' value ='Supprimer produit' onClick='deleteElement()'></div>";
        echo "<input type='button' value='Appliquer les changements' onClick='saveChange()'></div>";
        echo "</form>";
    }
?>