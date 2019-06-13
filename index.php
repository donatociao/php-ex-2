<!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a “Boolean”, altrimenti stampare
una stringa rossa. -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

    <?php
      $pass = $_GET['pass'];
      if($pass == 'Boolean') {
        echo '<div class="green">ACCESSO CONSENTITO</div>';
      } else {
        echo '<div class="red">ACCESSO NEGATO</div>';
      };
    ?>


  </body>
</html>
