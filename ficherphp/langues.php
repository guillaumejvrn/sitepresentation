<?php
$data=yaml_parse_file('ficheryaml/langues.yaml');
foreach($data AS $langages){
    echo "<h1>".$langages['langages']."</h1>";
    foreach($langages["langues"] AS $langues=> $niveau){
        echo "<p>".$langues;
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
?>