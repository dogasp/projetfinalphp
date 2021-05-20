<?php
    echo '<select name="'.$_POST["id"].'" id="dataSelect" onchange="recupForm()">';
    echo '<option value=""> --Choisissez un Element-- </option>';
    $list = explode("\n", file_get_contents("../../BDD/".$_POST["id"].".txt", true));
    array_pop($list);
    for($i = 0; $i < count($list); $i++){
        $tmp = explode("|", $list[$i]);
        echo "<option value = '".$i."'>".$tmp[4]."</option>";
    }
    echo "<br><br></select>";
    echo "<div id='result_data'></div>";
?>