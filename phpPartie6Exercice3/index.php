<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les paramètres d'URL Exercice3</title>
  </head>
  <body>
      <a href="index.php?dateDebut=2/05/2016&dateFin=27/11/2016">Afficher la date</a><hr>
      <a href="index.php">Revenir en arrière</a><hr>
    <?php
      if(isset($_GET['dateDebut']) AND isset($_GET['dateFin'])){
    ?>
    <p>
     <?php
        echo 'La date de début est : ' . $_GET['dateDebut'] . ' et la date de fin est ' . $_GET['dateFin'];
      } else {  
     ?>
    </p>
    <?php
        echo 'J\'ignore ce que tu souhaite appeler mais visiblement ça ne s\'affiche pas';
      }
     ?>
  
    
  </body>
</html>
