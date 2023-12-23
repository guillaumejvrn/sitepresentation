<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Guillaume</title>
        <link rel="stylesheet" href="css/css.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
        
        <div id="amorce"><p>Je m’appelle Guillaume et je suis un SIO développeur et réseau.</p></div>

        <div id="topimage"><img src="images/vue-arriere-equipe-dangereuse-pirates-informatiques-travaillant-nouveau-malware_482257-22976.jpg" alt="image de fou"></div>

        <div id="apropos"> 
            <p>SIO slam</p>
            <p>je m’appelle guillaume j'ai 18 ans et je suis passionné d'informatique et je souhaite en faire mon métier</p>
            <img src="images/2499795-photo-rsized-300x250.png">
        </div>
        <div id="competencesancre">
            <div id="hautcompet"><h1>Domaines : developpeur logiciel, cybersécurité, réseau</h1>
                <p>Items pour chaque domaine: java, cpp, html, css, javascript, php, mysql</p></div>        
            <div id="compet">
                <div id="item">
                    <?php
                    include('ficherphp/item.php');
                    ?>
                </div>
                <div>

                    <?php
                    include('ficherphp/certif.php');
                    ?>
                    <?php
                    include('ficherphp/langues.php')
                    ?>
                </div>
                </div>
                
            </div>
        </div>

        <div id="experiences">
            <?php
            include('ficherphp/stage.php')
            ?>
        </div>

        <div id="formation">
            <h1> formation</h1>
            <p class="caensup">caen sup saint ursule</p>
            <p>saint ursule 2023 - 2025</p>
            <p class="caensup">caen</p>
            <p class="caensup">développeur et réseau</p>
            <a href="CV/CVguillaumejenvrin.pdf"> mon CV</a>
        </div>


        <div id="contact">
            <div>formulaire de contact</div>
            <form method="post" action="fichermail.php">

                <label for="nom"> nom de l'expediteur</label>
                <input type="name" name="nom" required><br>

                <label for="to"> adresse de courriel</label>
                <input type="email" name="to" value="votre_adresse@mail.com" required><br>

                <label for="subject">objet du message</label>
                <input type="text" name="subject" required><br>

                <p>contenu du message</p>
                <textarea name="body"></textarea><br>

                <div class="g-recaptcha" data-sitekey="6LcBiDopAAAAABTPKyl-ul_xOZWkXVZydp803omz"></div>

                <input type="submit" value="Envoyer">

            </form>
        </div>

    <?php
    
    include('ficherphp/mail.php');
    
    ?>
    </form>
        <footer>
            <p>ce site est en vigueur a la loi et notamment au RGPD</p>
        </footer>
    </body>


</html>