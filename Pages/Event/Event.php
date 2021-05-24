<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event BDS</title>
    <link rel="stylesheet" href="style.css">
    <script src="event.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>  
<body>
<div id = "top_page">
    <h1>Évenements organisés par votre BDS</h1>
    <div id = "span_opac">
    <span>Vous avez cotisés dans notre association et vous souhaiter participer aux activités de votre association? <br> 
    Vous êtes sur la bonne page! <br>
    Pour vous y inscrire c'est juste en dessous: </span></div>
    </div> 
    <?php
        session_start();
        include "../../Generic/header.php";
    ?>
    <div class = "container">

    <?php
        $events = explode("\n", file_get_contents("../../BDD/event.txt", true)); #extraction des events
        foreach($events as $event){
            $list = explode("|", $event); #liste contenant les propriétés des events
            echo "<div class='event'>";
            echo "<div class='date'> du ". $list[3] . " au ". $list[4] . "</div>";
            echo "<div class='name'>". $list[1] . "</div>";
            echo "<div class='description'><br>". $list[5] . "<br><br></div>";
            echo "<div class='place'>". $list[2] . "</div>";
            echo "<div class='quantity'>".$list[6] ." places restantes</div>";

            if ($_SESSION["USER"] != -1){
                $tmp = 0;
                if ($_SESSION["UserEvent"] != NULL && intval($list[6]) > 0){
                    foreach (str_split($_SESSION["UserEvent"]) as $listeEvents){
                        if ($listeEvents[0] == $list[0]){
                            #création du botton comme quoi l'event a déjà été réservé
                            echo "<button class='EventButton' disabled> Déjà réservé</button>";
                            $tmp = 1;
                        }
                    }
                }
                if ($tmp == 0){
                    #event n'est pas réservé
                    echo "<button name=".$list[0]." class='EventButton' onclick='souscrireEvent(this)'>Reserver</button>";
                }
            }
            
            echo "</div>";
        }
    ?>
    </div>
</body>
</html>
