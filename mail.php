<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>envoie par mail</title>
    </head>

    <body>
        <?php
        $retour = mail('guillaume.jenvrin@sts-sio-caen.info', 'Envoi depuis la page Contact', $_POST['nom'],$_POST['adressemail'],$_POST['obj'],$_POST['contenu'], 'From: webmaster@monsite.fr');
        if ($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    ?>
    </body>
</html>


