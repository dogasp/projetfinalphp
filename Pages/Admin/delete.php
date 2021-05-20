<?php
    $datas = explode("\n", file_get_contents("../../BDD/".$_POST["db"].".txt", true)); #extraction des données
    array_pop($datas);
    
    $newData = array();
    $index = 0;
    foreach ($datas as $data){
        $list = explode("|", $data);
        if ($list[0] != $_POST["id"]){
            $list[0] = $index;
            $index ++;
            $tmp = implode("|", $list);
            array_push($newData, $tmp);
        }
    }
    $tmp = implode("\n", $newData);
    echo $tmp;

    $file = fopen("../../BDD/".$_POST["db"].".txt", "w");
    fwrite($file, $tmp);
    fclose($file);
    echo "Element retiré avec succès";
?>