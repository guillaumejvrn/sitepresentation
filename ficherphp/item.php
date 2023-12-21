<?php
function item(){
    require_once("yaml/yaml.php");
    $data=yaml_parse_file('ficheryaml/competences.yaml');
    //print_array($data);
    foreach($data AS $domaine){
    echo "<h1>".$domaine['domaine']."</h1>";
    foreach($domaine["competences"] AS $competence=> $niveau){
        echo "<p>".$competence;
        $star = "solid";
        for($i=1; $i < 6 ;$i++){
            echo '<img src="images/star-'.$star.'.svg" class="star">';
            if($i >= $niveau){
                $star ="regular";
            }
        }
        echo "</p>";
    }
}
}
?>