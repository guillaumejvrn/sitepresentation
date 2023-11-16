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
                <a href="#amorce">acceuil</a>
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
                    <p>java<img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"></p>
                    <p> cpp <img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"></p>
                    <p> html<img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-regular.svg" class="star"></p>
                    <p> css <img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-regular.svg" class="star"></p>
                    <p> javascript <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"></p>
                    <p>php  <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"></p>
                    <p> mysql  <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"> <img src="images/star-solid.svg" class="star"><img src="images/star-regular.svg" class="star"> </p>
                </div> // GENERER LES ETOILES AVEC PHP !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                <div>
                    <h2>score aux certifications</h2>
                    <p>voltaire 100%</p>
                    <p>cisco 100%</p>
                    <p>microsoft 100%</p>
                    <p>anglais<img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"></p>
                    <p>francais<img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"><img src="images/star-solid.svg" class="star"></p>
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
                <p>siege social de cisco</p>
                <p>test d'intrusion</p>
                <a href="CV.txt">mon CV</a>
            </div>
        </div>

        <div id="formation">
            <div> formation</div>
            <p>caen sup st ursule</p>
            <p>st ursule</p>
            <p>2023</p>
            <p>2025</p>
            <p>caen</p>
            <p>developpeur et reseau</p>
            <a href="CV.txt"> mon CV</a>
        </div>
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

                <p>capcha a faire</p>

                <input type="submit" value="Envoyer">

            </form>
        </div>
    </body>

</html>