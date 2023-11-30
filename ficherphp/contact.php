<doctype!>
<html>
    <head>
    
    <title>fonctionphp</title>

    </head>

    <?php
    
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
</html>