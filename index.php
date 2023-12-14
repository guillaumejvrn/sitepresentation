<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Guillaume</title>
        <link rel="stylesheet" href="css/css.css">
    </head>
    <body>
        <div id="barre">
            <h1><b>GUILLAUME JENVRIN</b></h1>
            <div id="navigation">
                <a href="#amorce">accueil</a>
                <a href="#apropos">a propos</a>
                <a href="#competencesancre">compétences</a>
                <a href="#experiences">expériences</a>
                <a href="#formation">formation</a>
                <a href="#contact">contact</a>
            </div>

        </div>
        
        <div id="amorce"><p>Je m’appelle Guillaume et je suis un développeur et expert en cybersécurité qualifié.</p></div>

        <div id="topimage"><img src="images/vue-arriere-equipe-dangereuse-pirates-informatiques-travaillant-nouveau-malware_482257-22976.jpg" alt="image de fou"></div>

        <div id="apropos"> 
            <p>expert en cybersécurité je suis certifié et diplômé d'état</p>
            <p>je m’appelle guillaume j'ai 18 ans et je suis passionné d'informatique et je souhaite continuer cette lignée</p>
            <img src="images/2499795-photo-rsized-300x250.png">
        </div>
        <div id="competencesancre">
            <div id="hautcompet"><h1>Domaines : developpeur logiciel, pentester, réseau</h1>
                <p>Items pour chaque domaine: java, cpp, html, css, javascript, php, mysql</p></div>        
            <div id="compet">
                <div id="item">
                    <?php
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
                    ?>
                </div>
                <div>

                    <?php
                    
                    $data=yaml_parse_file('ficheryaml/competences.yaml');
                    //print_array($data);
                    foreach($data AS $certif){
                        echo "<h1>".$certif['certif']."</h1>";
                        foreach($certif["score"] AS $score=> $niveau){
                            echo "<p>".$score." ".$niveau." %";
                            echo "</p>";
                        }
                    }
                    
                    ?>

                    <?php
                    $data=yaml_parse_file('ficheryaml/competences.yaml');
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
                </div>
                </div>
                
            </div>
        </div>

        <div id="experiences">
            <div>
                <h1>stage chez cisco</h1>
                <p>pentester</p>
                <p>cisco</p>
                <p>date de debut : 10/10/2020</p>
                <p>date de fin : 10/11/2020</p>
                <p>siège social de cisco</p>
                <p>test d'intrusion</p>
                <a href="CV.txt">mon CV</a>
            </div>
        </div>

        <div id="formation">
            <h1> formation</h1>
            <p class="caensup">caen sup saint ursule</p>
            <p>saint ursule 2023 - 2025</p>
            <p class="caensup">caen</p>
            <p class="caensup">développeur et réseau</p>
            <a href="CV.txt"> mon CV</a>
        </div>

        <?php

        include('formation.php');

        ?>

        <div id="contact">
            <div>formulaire de contact</div>
            <form method="post" action="mail.php">

                <label for="nom"> nom de l'expediteur</label>
                <input type="name" name="nom" required><br>

                <label for="adressemail"> adresse de courriel</label>
                <input type="email" name="adressemail" required><br>

                <label for="obj">objet du message</label>
                <input type="text" name="obj" required><br>

                <label for="contenu">contenu du message</label>
                <input type="text" name="contenu" required><br>

                <p>capcha à faire</p>

                <input type="submit" value="Envoyer">

            </form>
        </div>
        <?php

        

        ?>
    </body>

</html>