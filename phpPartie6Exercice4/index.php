<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Les paramètres d'URL Exercice4</title>
    </head>
    <body>
        <a href="index.php?langage=PHP&serveur=LAMP">Afficher les données</a>
        <p> 
            <?php
            if (isset($_GET['langage']) AND ( $_GET['serveur'])) {
                echo 'Langage ' . $_GET['langage'] . ' serveur ' . $_GET['serveur'];
            } else {
                echo 'Clique sur le lien ci-dessus pour afficher les données de l\'url.';
            }
            ?>
        </p>
        <p><a href="index.php">Retour</a></p>
        <p>Clique sur le lien ci-dessus pour revenir en arrière.</p>
    </body>
</html>
