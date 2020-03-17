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
                <form method="POST" id="signup-form" class="signup-form">
                    <h2>Connexion</h2>
                    <br><br>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email"  placeholder="Email"/>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" class="form-input" name="mdp"  placeholder="Mot de passe"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-submit submit" value="Valider"/>
                        <a href="form_inscription" class="submit-link submit">Inscription</a>
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
