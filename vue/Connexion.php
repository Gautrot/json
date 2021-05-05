<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
  </head>
  <body>
    <?php
    if (isset($_SESSION['erreur'])) {
      echo '<div>'.$_SESSION['erreur'].'</div>';
    }
    ?>
    <h1>Se connecter</h1>
    <hr>
    <form method="post" action="../traitement/Connexion.php">
      <div>
        <input type="email" name="email" placeholder="E-mail" required autofocus>
      </div>
      <div>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
      </div>
      <button type="submit">Se connecter</button>
    </form>
  </body>
</html>
