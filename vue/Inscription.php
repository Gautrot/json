<?php
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link href="../js/select2-4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="../js/select2-4.1.0-rc.0/dist/js/select2.min.js"></script>
  </head>
  <body>
    <h1>Inscrivez-vous !</h1>
    <hr>
    <?php
    if (isset($_SESSION['erreur'])) {
      echo '<div>'.$_SESSION['erreur'].'</div>';
    }
    ?>
    <form method="post" action="../traitement/Inscription.php">
      <div>
        <input type="text" name="nom" placeholder="Nom" required>
      </div>
      <div>
        <input type="text" name="prenom" placeholder="Prénom" required>
      </div>
      <div>
        <input type="date" name="dateNaissance" placeholder="Date de naissance" required>
      </div>
      <div>
        <input type="email" name="email" placeholder="E-mail" required>
      </div>
      <div>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
      </div>
      <div>
        <select class="js-example-responsive" style="width: 50%"></select>
      </div>
      <div>
        <input type="submit" value="S'inscrire" />
      </div>
    </form>
    <div>
  </body>
</html>
