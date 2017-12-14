<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Les paramètres d'URL Exercice5</title>
    </head>
    <body>
        <a href="index.php?semaine=12">Affiche les données</a>
        <p>
            <?php
            if (isset($_GET['semaine'])) {
                echo $_GET['semaine'];
            } else {
                echo 'Clique sur le lien ci-dessus pour afficher les données de l\'url';
            }
            ?>
        </p>
        <p><a href="index.php">Retour</a></p>

    </body>
</html>
