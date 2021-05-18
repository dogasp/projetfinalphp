<?php
    session_start();
    function closeDB($list, $dblist, $id, $dbname){
        $dblist[$id] = implode("|", $list);
        $tmp = implode("\n", $dblist);

        $file = fopen("../../BDD/".$dbname.".txt", "w");
        fwrite($file, $tmp);
        fclose($file);
    }
?>