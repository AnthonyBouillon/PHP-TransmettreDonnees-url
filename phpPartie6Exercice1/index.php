<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les paramètres d'URL Exercice 1</title>
  </head>
  <body>
      <a href="index.php?nom=Bouillon&amp;prenom=Anthony&amp;age=17">Lien explicite</a>
    <?php
      if(isset($_GET['prenom']) AND isset($_GET['nom'])){
        echo $_GET['prenom'] . ' ' . $_GET['nom'];
      } else{
    ?> 
    <p>
    <?php
      echo 'Clique sur le lien pour afficher';
     }
    ?>
  </p>
  </body>
</html>

