<?php
session_start();
if(isset($_SESSION['erreur_co'])){
  echo '<script>
  alert("Mauvais email ou mot de passe.");
  </script>';
  unset($_SESSION['erreur_co']);
}
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../lib/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../lib/css/form_style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="POST" action="../traitement/cible_connexion.php" class="signup-form">
                    <h2>Connexion</h2>
                    <br><br>
                    <div class="form-group">
                        <input type="text" class="form-input" name="email"  placeholder="Email"/>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" class="form-input" name="mdp"  placeholder="Mot de passe"/>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-submit submit" value="Valider"/>
                        <a href="form_inscription.php" class="submit-link submit">Inscription</a>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="../lib/vendor/jquery/jquery.min.js"></script>
    <script src="../lib/js/main.js"></script>
</body>
</html>
<?php
  if(isset($_GET['reserv'])){
    echo '<script>
    alert("Veuillez vous connecter pour faire une réservation.");
    window.location.href="form_connexion.php";
    </script>';
    unset($_SESSION['erreur_co']);
  }
?>
