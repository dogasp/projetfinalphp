<?php
    if (!isset($_POST["id"])){
        exit("<h1>Vous n'avez pas les droits nécessaires pour acceder à cette page!</h1><br><a href='../../index.php'>Retourner à l'acueil</a>");
    }
    $data = file_get_contents("../../BDD/".$_POST["db"].".txt", true);
    $datas = explode("\n", $data); #extraction des données
    
    if ($_POST["id"] == count($datas)-1){
        $data = str_replace($datas[$_POST["id"]], "", $data);
    }
    else{
        $data = str_replace($datas[$_POST["id"]]."\n", "", $data);
    }

    $datas = explode("\n", $data);

    $index = 0;
    for ($i = 0; $i < count($datas); $i++){
        $list = explode("|", $datas[$i]);
        $list[0] = $index ++;
        $datas[$i] = implode("|", $list);
    }
    $tmp = implode("\n", $datas);

    $file = fopen("../../BDD/".$_POST["db"].".txt", "w");
    fwrite($file, $tmp);
    fclose($file);

    echo "Element retiré avec succès";
?>