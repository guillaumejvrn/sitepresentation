<?php

$data=yaml_parse_file('ficheryaml/certif.yaml');
//print_array($data);
foreach($data AS $certif){
    echo "<h1>".$certif['certif']."</h1>";
    foreach($certif["score"] AS $score=> $niveau){
        echo "<p>".$score." ".$niveau." %";
        echo "</p>";
    }
}

?>