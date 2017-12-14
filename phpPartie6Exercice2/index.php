<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les paramètres d'URL Exercice2</title>
  </head>
  <body>
    <a href="index.php?nom=Bouillon&amp;prenom=Anthony&amp;age=17">Lien explicite</a>
    <?php
      if(isset($_GET['age'])){
        echo $_GET['age'];
      } else{
        echo 'L\'age n\'existe pas';
      }
     ?>
  </body>
</html>
