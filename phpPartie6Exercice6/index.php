<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les paramètres d'URL Exercice6</title>
  </head>
  <body>
    <a href="index.php?batiment=12&salle=101">Affiche les données</a>
        <p>
            <?php
            if (isset($_GET['batiment']) AND ($_GET['salle'])) {
                echo 'Le numéro du batiment est ' . $_GET['batiment'] . ' et le numéro de la salle est ' . $_GET['salle'];
            } else {
                echo 'Clique sur le lien ci-dessus pour afficher les données de l\'url';
            }
            ?>
        </p>
        <p><a href="index.php">Retour</a></p>
  </body>
</html>
