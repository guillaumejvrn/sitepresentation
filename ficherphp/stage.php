<?php

$data=yaml_parse_file('ficheryaml/stage.yaml');
//print_array($data);
foreach($data AS $certif){
    echo "<h1>".$certif['stage']."</h1>";
    foreach($certif["stages"] AS $score=> $niveau){
        echo "<p>".$score." ".$niveau."<br>";
        echo "</p>";
    }
}

?>