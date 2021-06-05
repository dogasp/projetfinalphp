<?php
    session_start();
    //fonction utilisée pour enregistrer une base de donnée
    function closeDB($list, $dblist, $id, $dbname){
        $dblist[$id] = implode("|", $list); //on transforme la liste des atributs d'un element en un string séparé par un |
        $tmp = implode("\n", $dblist); //on transforme la liste des elements en string, séparé par \n

        $file = fopen("../../BDD/".$dbname.".txt", "w"); //ouverture du fichier
        fwrite($file, $tmp); //écriture (override) des données
        fclose($file);
    }
?>