<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form">
                    <h2>Inscription </h2>

                    <div class="form-group">
                        <input type="text" class="form-input" name="nom"  placeholder="Nom"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="prenom"  placeholder="Prenom"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email"  placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="mdp"  placeholder="Mot de passe"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-submit submit" value="S'inscrire"/>
                        <a href="#" class="submit-link submit">Connexion</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>